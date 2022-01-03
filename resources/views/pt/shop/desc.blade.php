@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner"
        style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Carica</h1>
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
            <div class="row g-5 p-4">
                <div class="col-lg-4 span">
                    <img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt=""
                        class="img-fluid rounded-3">
                </div>
                <div class="col-lg-8">
                    <span class="h1">{{ $produk->nama }}</span><br>
                    <span class="text-muted">{{ $produk->deskripsi }}</span>
                    <h4 class="text-success my-4">Rp. {{ number_format($produk->harga) }},-
                    </h4>
                    <p>{!! nl2br(e($produk->deskripsi)) !!}</p>
                    <div class="input-group">
                        <button class="btn btn-outline-success" type="button" id="button-addon1">-</button>
                        <input type="text" class="form-control text-center" value="1" style="max-width: 60px">
                        <button class="btn btn-outline-success" type="button" id="button-addon1">+</button>
                    </div>
                    <a href="#" class="btn btn-carica mt-4">Tambah ke keranjang</a>
                </div>
            </div>
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
        @stop
