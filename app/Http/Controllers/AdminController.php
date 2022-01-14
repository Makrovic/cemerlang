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

    public function checkAuth()
    {
        $admin = Auth::guard('admin')->user()->name;
        dd($admin);
    }
}
