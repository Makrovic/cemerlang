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
                        <h1>Detail Produk</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
{{-- @dump($produk) --}}
<section class="sec">
    <div class="container">
        <div class="row g-5 p-4" data-aos="fade-up">
            <div class="col-lg-4 span">
                <img src="{{ asset('images/pt/produk/'.$produk->foto.'.jpg') }}" alt="" class="img-fluid rounded-3">
            </div>
            <div class="col-lg-8">
                <span class="h1">{{ $produk->nama }}</span><br>
                <span class="text-muted">{{ $produk->kategori }}</span>
                <h4 class="text-success my-4">Rp. {{ number_format($produk->harga) }},-
                </h4>
                <p>{!! nl2br(e($produk->deskripsi)) !!}</p>
                <form action="{{route('bintang.shop.cart.add')}}" method="get">
                    <input type="hidden" name="kodeproduk" value="{{$produk->kode_produk}}">
                    <input type="number" name="jumlah" class="form-control text-center" value="1"
                        style="max-width: 60px">
                    <button type="submit" class="btn btn-carica mt-4">Tambah ke keranjang</button>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop