<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Legalitas;
use App\Models\Produk;
use App\Models\Kota;
use App\Models\Order;
use Carbon\Carbon;
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
        }
        return redirect()->route('bintang.shop.cart');
    }

    public function removeFromCart($kodeproduk)
    {
        if (Session::has('cart') && Session::get('cart')->has($kodeproduk)) {
            $unit = 'pt';
            $jumlah = Session::get('cart')->count();
            if ($jumlah <= 1) {
                Session::forget('cart');
            } else {
                $cart = Session::get('cart');
                $cart->forget($kodeproduk);
                Session::put('cart', $cart);
                Session::save();
            }
        }
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

    public function checkOut()
    {
        $unit = 'pt';
        if (Session::has('cart')) {
            $cart = Session::get('cart')->all();
            $produks = Produk::get();
            $carts = collect();
            $total = 0;
            $totalbrg = 0;
            $totalbrt = 0;
            foreach ($cart as $kodeproduk => $jumlah) {
                $produk = $produks->where('kode_produk', $kodeproduk)->first();
                $subtotal = $produk->harga * $jumlah;
                $total = $total + $subtotal;
                $totalbrg = $totalbrg + $jumlah;
                $totalbrt =  $totalbrt + ($produk->berat * $jumlah);
                $carts->push(['kode_produk' => $kodeproduk, 'nama' => $produk->nama, 'jumlah' => $jumlah, 'subtotal' => $produk->harga * $jumlah]);
            }
            $provinsis = Kota::get()->unique('province_id')->pluck('province_name', 'province_id');
            $totalan = collect([
                'total' => $total,
                'totalbrg' => $totalbrg,
                'totalbrt' => $totalbrt
            ]);
            Session::put('totalan', $totalan);
            Session::save();
            return \view('pt.shop.checkout', \compact('unit', 'carts', 'provinsis'));
        } else {
            return redirect()->route('bintang.shop.cart');
        }
    }

    public function getCities($id)
    {
        $city = Kota::where('province_id', $id)->pluck('city_name', 'city_id');
        return response()->json($city);
    }

    public function courierCheck(Request $request)
    {
        $totalan = Session::get('totalan');
        $city = $request->city;
        $courier = $request->courier;
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 498,
            'destination'   => $city,
            'weight'        => $totalan['totalbrt'],
            'courier'       => $courier
        ])->get();
        return response()->json($cost);
    }

    public function costCheck($city, $weight, $courier, $service)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 498,
            'destination'   => $city,
            'weight'        => $weight,
            'courier'       => $courier
        ])->get();
        $cost = $cost[0]['costs'][$service];
        return $cost;
    }

    public function rajaOngkir()
    {
        $city = Kota::where('province_id', 10)->pluck('city_name', 'city_id');
        dd($city);
    }

    public function storeCheckOut(Request $request)
    {
        if (Session::has('cart') && Session::has('totalan')) {
            $request->validate([
                'nama' => 'required',
                'provinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'alamat' => 'required',
                'nohp' => 'required|numeric',
                'kurir' => 'required',
            ]);
            $unit = 'pt';
            $count = Order::count();
            $cost = explode(':', $request->cost);
            $kotas = Kota::where('city_id', $cost[0])->first();
            $totalan = Session::get('totalan');

            $kodetransaksi = 'tr' . Carbon::now()->translatedFormat("ymdH") . $count + 1;
            $nohp = '62' . $request->nohp;
            $alamat = $request->alamat . ' - ' . $request->kecamatan . ' - ' . $request->zip;
            $kota = $kotas->city_type . ' ' . $kotas->city_name . ', ' . $kotas->province_name;
            $berat = $totalan['totalbrt'];
            $subtotal = $totalan['total'];
            $cekongkir = $this->costCheck($cost[0], $berat, $cost[1], $cost[2]);
            $ongkir = $cekongkir['cost'][0]['value'];
            $ekspedisi = strtoupper($cost[1]) . ' ' . $cekongkir['service'];
            $estimasi = $cekongkir['cost'][0]['etd'] . ' hari';
            $catatan = $request->catatan;

            $order = [
                'kode_transaksi' => $kodetransaksi,
                'tgl_transaksi' => Carbon::now()->translatedFormat('Y-m-d h:i:s'),
                'buyer' => $request->nama,
                'nohp' => $nohp,
                'alamat' => $alamat,
                'kota' => $kota,
                'total_produk' => $totalan['totalbrg'],
                'berat' => $berat,
                'subtotal' => $subtotal,
                'ongkir' => $ongkir,
                'total' => $subtotal + $ongkir,
                'ekspedisi' => $ekspedisi,
                'estimasi' => $estimasi,
                'catatan' => $catatan
            ];

            $cart = Session::get('cart')->all();
            $produks = Produk::get();
            $carts = collect();
            foreach ($cart as $kodeproduk => $jumlah) {
                $produk = $produks->where('kode_produk', $kodeproduk)->first();
                $carts->push(['kode_produk' => $kodeproduk, 'nama' => $produk->nama, 'jumlah' => $jumlah, 'subtotal' => $produk->harga * $jumlah]);
                $keranjang[] = ['kode_transaksi' => $kodetransaksi, 'kode_produk' => $kodeproduk, 'nama_produk' => $produk->nama, 'jumlah' => $jumlah, 'subtotal' => $produk->harga * $jumlah];
            }

            if (Order::create($order) && Cart::insert($keranjang)) {
                Session::forget('cart');
                Session::forget('totalan');
                return \view('pt.shop.checkoutdone', \compact('unit', 'order', 'carts'));
            }
        }
        return redirect()->back();
    }
}
