<?php

namespace App\Http\Controllers;

use App\Models\Legalitas;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class PtController extends Controller
{
    public function carica()
    {
        $unit = 'pt';
        $sec = 'visimisi';
        $legalitas = Legalitas::where('unit', $unit)->get();
        return \view('pt.carica', \compact('legalitas', 'unit', 'sec'));
    }
    public function legalitas()
    {
        $unit = 'pt';
        $sec = 'legalitas';
        $legalitas = Legalitas::where('unit', $unit)->get();
        return \view('pt.carica', \compact('legalitas', 'unit', 'sec'));
    }
    public function shop()
    {
        $unit = 'pt';
        $produks = Produk::all();
        return \view('pt.shop', \compact('produks', 'unit'));
    }
    public function produkDesc($kodeproduk)
    {
        $unit = 'pt';
        $produk = Produk::get()->where('kode_produk', $kodeproduk)->first();
        return \view('pt.shop.desc', \compact('produk', 'unit'));
    }
    public function showCart()
    {
        $unit = 'pt';
        if (Session::has('cart')) {
            $cart = Session::get('cart')->all();
            $produks = Produk::get();
            $carts = collect();
            $total = 0;
            $totalbrg = 0;
            foreach ($cart as $kodeproduk => $jumlah) {
                $produk = $produks->where('kode_produk', $kodeproduk)->first();
                $subtotal = $produk->harga * $jumlah;
                $total = $total + $subtotal;
                $totalbrg = $totalbrg + $jumlah;
                $carts->push(['kode_produk' => $kodeproduk, 'nama' => $produk->nama, 'harga' => $produk->harga, 'jumlah' => $jumlah, 'subtotal' => $produk->harga * $jumlah]);
            }
            // dd($cart);
            return \view('pt.shop.cart', \compact('unit', 'carts', 'total', 'totalbrg'));
        } else {
            return \view('pt.shop.cart', \compact('unit'));
        }
    }

    public function addToCart($kodeproduk)
    {
        $unit = 'pt';
        $jumlah = 1;
        $produks = Produk::where('kode_produk', $kodeproduk)->first();
        if ($produks != null) {
            if (Session::has('cart')) {
                if (Session::get('cart')->has($kodeproduk)) {
                    $cart = Session::get('cart');
                    $total = Session::get('cart')->all()[$kodeproduk] + $jumlah;
                    $cart = $cart->replace([$kodeproduk => $total]);
                } else {
                    $cart = Session::get('cart');
                    $cart->put($kodeproduk, 1);
                }
            } else {
                $cart = collect([
                    $kodeproduk => 1
                ]);
            }
            Session::put('cart', $cart);
            Session::save();
            return redirect()->route('bintang.shop.cart');
        } else {
            return 'oops!';
        }
    }

    public function removeFromCart($kodeproduk)
    {
        $unit = 'pt';
        $jumlah = 1;
        $cart = Session::get('cart');
        $cart->forget($kodeproduk);
        Session::put('cart', $cart);
        Session::save();
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        $unit = 'pt';
        $jml_ttl = Session::get('cart')->count();
        $cart = collect();
        for ($i = 0; $i < $jml_ttl; $i++) {
            $kodeproduk =  $request['kodeproduk' . $i . ''];
            $jumlah = (int)$request['jumlah' . $i . ''];
            if ($jumlah < 1) {
                $jumlah = 1;
            }
            $cart->put($kodeproduk, $jumlah);
        }
        Session::put('cart', $cart);
        Session::save();
        return redirect()->back();
    }

    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->back();
    }

    public function rajaOngkir()
    {
        $daftarProvinsi = RajaOngkir::ongkir([
            'origin'        => 155,     // ID kota/kabupaten asal
            'destination'   => 80,      // ID kota/kabupaten tujuan
            'weight'        => 1300,    // berat barang dalam gram
            'courier'       => 'jne'    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ]);
        dd($daftarProvinsi);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
