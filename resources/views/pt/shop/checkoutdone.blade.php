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
<section class="sec back-gray">
    <div class="container">
        <div class="bg-white p-4 rounded shadow-sm">
            <h4 class="m-2 text-center">Rincian Pesanan</h4>
            <p><b>Nama : </b>{{ $order['buyer'] }}</p>
            <p><b>No HP : </b>{{ $order['nohp'] }}</p>
            <p><b>Alamat : </b>{{ $order['alamat'] }}</p>
            <p><b>Kota : </b>{{ $order['kota'] }}</p>
            <p><b>Catatan : </b>"{{ $order['catatan'] }}"</p>

            <div class="row">
                <div class="col">
                    @foreach ($carts as $cart)
                    <div class="row m-2 border-bottom">
                        <div class="col-auto">
                            {{ $cart['jumlah'] }}
                        </div>
                        <div class="col d-flex flex-column justify-content-center">
                            <span><b>{{ $cart['nama'] }}</b><br>
                                Rp. {{ number_format($cart['subtotal']) }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col">
                    <h4 class="text-center m-2">Total</h4>
                    <div class="row border-bottom m-2">
                        <div class="col">Total Barang</div>
                        <div class="col">{{ $order['total_produk'] }}</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Total Berat</div>
                        <div class="col">{{ $order['berat'] }} gr</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Subtotal</div>
                        <div class="col">Rp. {{ number_format( $order['subtotal']) }},-</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Ekspedisi</div>
                        <div class="col">{{ $order['ekspedisi'] }}</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Ongkos Kirim</div>
                        <div class="col">Rp. {{ number_format( $order['ongkir']) }},-</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Total</div>
                        <div class="col">Rp. {{ number_format( $order['total']) }},-</div>
                    </div>
                    <div class="row border-bottom m-2">
                        <div class="col">Etimasi pengiriman</div>
                        <div class="col">{{ $order['estimasi'] }}</div>
                    </div>
                    <div class="row m-2">
                        <div class="col text-end fw-bold">{{ $order['tgl_transaksi'] }} | {{ $order['kode_transaksi'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('customjs')
@stop