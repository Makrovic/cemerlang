<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended('super/dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Admin::where('username', $request->username)->first();
            $request->session()->regenerate();
            return redirect()->intended('super/dashboard');
        } else {
            return back()->with(['success' => 'Email or password is incorrect']);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('super.login'); //routing login
    }

    public function dashboard()
    {
        $orders = Order::get();

        $newOrders = $orders->where('status', '0');

        $totalProduk = Produk::count();
        $totalOrder = $orders->count();
        $totalSoldProduk = $orders->sum('total_produk');

        $topSellers = DB::table('carts')
            ->join('produks', 'produks.kode_produk', '=', 'carts.kode_produk')
            ->groupBy('carts.kode_produk')
            ->select('produks.foto', 'produks.nama', 'produks.kategori', 'produks.harga', DB::raw('SUM(carts.jumlah) as total'))
            ->orderByDesc('total')
            ->get();

        return view('admin.dashboard', compact('newOrders', 'totalProduk', 'totalOrder', 'totalSoldProduk', 'topSellers'));
    }

    public function produk()
    {
        $produks = DB::table('produks')
            ->leftJoin('carts', 'carts.kode_produk', '=', 'produks.kode_produk')
            ->groupBy('produks.kode_produk')
            ->select('produks.*', DB::raw('coalesce(SUM(carts.jumlah),0) as total'))
            ->get();

        return view('admin.produk', compact('produks'));
    }

    public function addProduk(Request $request)
    {
        $produk = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $total = Produk::count() + 1;
        $number = sprintf("%02d", $total);
        $kode = 'p' . substr($request->kategori, 0, 3) . Carbon::now()->translatedFormat("ym") . $number;
        $kodeproduk = ['kode_produk' => $kode];
        $produk['foto'] = $kode;
        $produks = $kodeproduk + $produk;
        $file = $request->file('foto');
        $dir = 'images/pt/produk/';
        if ($file->move($dir, $produk['foto'] . '.jpg')) {
            $jpg = Image::make('images/pt/produk/' . $produk['foto'] . '.jpg')->encode('jpg', 60)->fit(600);
            $jpg->save('images/pt/produk/' . $produk['foto'] . '.jpg');
            if (Produk::create($produks)) {
                return redirect()->route('super.produk')->with(['success' => 'Produk Berhasil Ditambahkan']);
            } else {
                return back()->with(['error' => 'Produk Tidak Berhasil Ditambahkan']);
            }
        } else {
            return back()->with(['error' => 'Foto Tidak Berhasil Diupload']);
        }
    }

    public function editProduk($kodeproduk)
    {
        $produk = Produk::where('kode_produk', $kodeproduk)->first();
        if ($produk != null) {
            return view('admin.produk.edit', compact('produk'));
        } else {
            return redirect()->route('super.produk');
        }
    }

    public function updateProduk(Request $request, $kodeproduk)
    {
        $produks = Produk::where('kode_produk', $kodeproduk)->first();
        $produk = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'deskripsi' => 'required'
        ]);
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
            ]);
            $file = $request->file('foto');
            $dir = 'images/pt/produk/';
            if ($file->move($dir, $produks->foto . '.jpg')) {
                $jpg = Image::make('images/pt/produk/' . $produks->foto . '.jpg')->encode('jpg', 60)->fit(600);
                $jpg->save('images/pt/produk/' . $produks->foto . '.jpg');
            } else {
                return back()->with(['error' => 'Foto Tidak Berhasil Diupload']);
            }
        }
        if ($produks->update($produk)) {
            return redirect()->route('super.produk')->with(['success' => 'Produk Berhasil Diubah']);
        } else {
            return back()->with(['error' => 'Produk Tidak Berhasil Diubah']);
        }
    }

    public function removeProduk($kodeproduk)
    {
        $produk = Produk::where('kode_produk', $kodeproduk)->first();
        if ($produk != null) {
            Produk::where('kode_produk', $kodeproduk)->delete();
            Cart::where('kode_produk', $kodeproduk)->update(['kode_produk' => NULL]);
            File::delete('images/pt/produk/' . $produk->foto . '.jpg');
            return redirect()->route('super.produk')->with(['success' => 'Produk Berhasil Dihapus']);
        } else {
            return redirect()->route('super.produk')->with(['error' => 'Produk Tidak Berhasil Dihapus']);
        }
    }

    public function order()
    {
        $orders = Order::get();
        return view('admin.order', compact('orders'));
    }

    public function editOrder($kodetransaksi)
    {
        $carts = Cart::where('kode_transaksi', $kodetransaksi)->get();
        $order = Order::where('kode_transaksi', $kodetransaksi)->first();
        $buyer = urlencode($order->buyer);
        $alamat = urlencode($order->alamat);
        $kota = urlencode($order->kota);
        $nohp = $order->nohp;
        $linkwa = 'https://api.whatsapp.com/send?phone=' . $nohp . '
        &text=Halo%20' . $buyer . '.
        %0APesanan%20akan%20anda%20di%20bintangcemerlangindonesia.com%20akan%20segera%20diproses%2C%20dan%20segera%20dikirim%20ke%20alamat%20%3A%20
        %0A' . $alamat . '.
        %0A' . $kota . '.
        %0AApakah%20alamat%20pesanan%20tersebut%20sudah%20benar%3F
        %0ASegera%20konfirmasikan%20kepada%20kami%20apabila%20ada%20perubahan.';
        if ($order != null) {
            return view('admin.order.edit', compact('order', 'carts', 'linkwa'));
        } else {
            return redirect()->route('super.order');
        }
    }

    public function updateOrder(Request $request, $kodetransaksi)
    {
        $orders = Order::where('kode_transaksi', $kodetransaksi)->first();
        if ($orders->update($request->all())) {
            return redirect()->route('super.order')->with(['success' => 'Pesanan Berhasil Diubah']);
        }
    }

    public function removeOrder($kodetransaksi)
    {
        $order = Order::where('kode_transaksi', $kodetransaksi)->first();
        if ($order != null) {
            Order::where('kode_transaksi', $kodetransaksi)->delete();
            Cart::where('kode_transaksi', $kodetransaksi)->delete();
            return redirect()->route('super.order')->with(['success' => 'Pesanan Berhasil Dihapus']);
        } else {
            return redirect()->route('super.order')->with(['error' => 'Pesanan Tidak Berhasil Dihapus']);
        }
    }

    public function printAddress($kodetransaksi)
    {
        $order = Order::where('kode_transaksi', $kodetransaksi)->first();
        return view('admin.order.print-address', compact('order'));
    }

    public function weeklyReport()
    {
        $orders = Order::where('status', '3')->whereBetween('tgl_transaksi', [
            Carbon::parse('last monday')->startOfDay(),
            Carbon::parse('next saturday')->endOfDay(),
        ])->get();
        return view('admin.order.report.weekly', compact('orders'));
    }

    public function monthlyReport()
    {
        $orders = Order::where('status', '3')->whereMonth('tgl_transaksi', date('m'))->whereYear('tgl_transaksi', date('Y'))->get();
        return view('admin.order.report.monthly', compact('orders'));
    }

    public function annualReport()
    {
        $orders = Order::where('status', '3')->whereYear('tgl_transaksi', date('Y'))->get();
        return view('admin.order.report.annual', compact('orders'));
    }

    public function checkAuth()
    {
        $admin = Auth::guard('admin')->user()->name;
        dd($admin);
    }
}
