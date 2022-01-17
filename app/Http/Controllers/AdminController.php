<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
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

        return \view('admin.dashboard', \compact('newOrders', 'totalProduk', 'totalOrder', 'totalSoldProduk', 'topSellers'));
    }

    public function produk()
    {
        $produks = DB::table('produks')
            ->leftJoin('carts', 'carts.kode_produk', '=', 'produks.kode_produk')
            ->groupBy('produks.kode_produk')
            ->select('produks.*', DB::raw('coalesce(SUM(carts.jumlah),0) as total'))
            ->get();

        return \view('admin.produk', \compact('produks'));
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
        $number = sprintf("%03d", $total);
        $kode = ['kode_produk' => 'p' . $request->kategori[0] . $number];
        $produk['foto'] = $request->kategori . Produk::count() + 1;
        $produks = $kode + $produk;
        $file = $request->file('foto');
        $tujuan_upload = 'images/pt/' . $produk['kategori'] . '/';
        if ($file->move($tujuan_upload, $produk['foto'] . '.jpg')) {
            $jpg = Image::make('images/pt/' . $produk['kategori'] . '/' . $produk['foto'] . '.jpg')->encode('jpg', 60)->fit(600);
            $jpg->save('images/pt/' . $produk['kategori'] . '/' . $produk['foto'] . '.jpg');
            if (Produk::create($produks)) {
                return redirect()->route('super.produk')->with(['success' => 'Produk Berhasil Ditambahkan']);
            } else {
                return back()->with(['error' => 'Produk Tidak Berhasil Ditambahkan']);
            }
        } else {
            return back()->with(['error' => 'Foto Tidak Berhasil Diupload']);
        }
    }

    public function checkAuth()
    {
        $admin = Auth::guard('admin')->user()->name;
        dd($admin);
    }
}
