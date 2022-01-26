@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
{{-- banner --}}
<div id="banner" class="banner" style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
    <div class="banner-hero">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5" data-aos="fade-up">
                    <div class="banner-title">
                        <h1>Keranjang</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
{{-- @dump($produk) --}}
<section class="sec back-gray">
    <div class="container-lg">
        @isset($carts)
        <div class="row g-3">
            <div class="col-md-12 col-lg-8">
                <div class="bg-white p-2 rounded shadow-sm">
                    <form action="{{ URL::route('bintang.shop.cart.update') }}" method="post">
                        {{ csrf_field() }}
                        @foreach ($carts as $cart)
                        <div class="row g-2 m-2 p-1 border-bottom flex-row justify-content-center">
                            <div class="col-auto d-flex flex-column justify-content-center">
                                <a href="{{ URL::route('bintang.shop.cart.remove', $cart['kode_produk']) }}"><span
                                        class="btn btn-outline-danger rounded"><i class="fas fa-trash"></i></span></a>
                            </div>
                            <div class="col-auto img-cart">
                                <img src="{{ asset('images/pt/produk/'.$cart['kode_produk'].'.jpg') }}" alt=""
                                    class="img-fluid rounded-3" style="max-width: 80px">
                            </div>
                            <div class="col col-md col-lg d-flex flex-column justify-content-center">
                                <input type="hidden" name="kodeproduk{{ $loop->index }}"
                                    value="{{ $cart['kode_produk'] }}">
                                <span>{{ $cart['nama'] }}<br><b>Rp.
                                        {{ number_format($cart['harga']) }}</b></span>
                            </div>
                            <div class="col-md-6 col-lg d-flex flex-row align-items-center">
                                <span class="cart-text me-3">Jumlah</span>
                                <input type="number" class="form-control text-center" name="jumlah{{ $loop->index }}"
                                    value="{{ $cart['jumlah'] }}" style="max-width: 60px" onchange="inputChange()"
                                    required>
                            </div>
                            <div class="col d-flex flex-row align-items-center">
                                <span class="cart-text me-3">Subtotal</span>
                                <b>Rp. <span>{{ number_format($cart['subtotal']) }}</span></b>
                            </div>
                        </div>
                        @endforeach
                        <div class="d-flex flex-column flex-md-row justify-content-between">
                            <a href="{{ URL::route('bintang.shop.cart.clear') }}"
                                class="badge bg-danger link-light text-decoration-none m-1">
                                kosongkan keranjang
                            </a>
                            <button type="submit" id="btn-refresh-cart"
                                class="btn badge back-primaryc link-light text-decoration-none m-1"
                                style="visibility: hidden">
                                perbarui keranjang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="bg-white p-2 rounded shadow-sm">
                    <h2 class="text-center m-2">Total</h2>
                    <div class="row border-bottom m-2">
                        <div class="col">Total Barang</div>
                        <div class="col">{{ $totalbrg }}</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Total</div>
                        <div class="col">Rp. {{ number_format($total) }},-</div>
                    </div>
                    <div class="m-2 d-flex flex-column flex-md-row justify-content-between">
                        <a href="{{ URL::route('bintang.shop') }}" class="btn btn-carica mt-4">
                            < Kembali Belanja</a>
                                <a href="{{ URL::route('bintang.shop.checkout') }}" class="btn btn-carica mt-4">Checkout
                                    ></a>
                    </div>
                </div>
            </div>
        </div>
        @endisset
        @empty($carts)
        <div class="bg-white p-5 m-2 rounded shadow-sm text-center ">
            <div data-aos="zoom-in">
                <h1><i class="fa fa-shopping-cart text-primaryc" aria-hidden="true"></i></h1>
                <h3 class="">Keranjang Kosong</h3>
                <a href="{{ URL::route('bintang.shop') }}" class="btn btn-carica mt-4">Belanja</a>
            </div>
        </div>
        @endempty
    </div>
</section>
@stop
@section('customjs')
<script>
    function inputChange() {
            document.getElementById("btn-refresh-cart").style.visibility = "visible";
        }
</script>
@stop