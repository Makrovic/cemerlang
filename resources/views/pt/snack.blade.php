@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
{{-- banner --}}
<div id="banner" class="banner2" style="background-image: url('../images/pt/banner3.jpg')">
    <div class="banner-hero">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5" data-aos="fade-up">
                    <div class="banner-title">
                        <h1>Bintang Cemerlang Snack</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
<section class="sec">
    <div class="container-fluid">
        <h1 class="title text-center" data-aos="fade-up">Produk Kami</h1>
        <div class="row g-3">
            <div class="col-6">
                <div class="img-box-zoom" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('images/pt/snack/petos.jpg') }}">
                    <h3 class="h2">Keripik Kedelai Kucai</h3>
                </div>
            </div>
            <div class="col-6">
                <div class="img-box-zoom" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('images/pt/snack/jamur.jpg') }}">
                    <h3 class="h2">Keripik Jamur Benik</h3>
                </div>
            </div>
            <div class="col-6">
                <div class="img-box-zoom" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('images/pt/snack/kedele.jpg') }}">
                    <h3 class="h2">Kedelai Goreng Empuk</h3>
                </div>
            </div>
            <div class="col-6">
                <div class="img-box-zoom" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('images/pt/snack/piscok.jpg') }}">
                    <h3 class="h2">Keripik Pisang Cokelat</h3>
                </div>
            </div>
        </div>
        <div class="row flex-row justify-content-center">
            <div class="col-6 m-3">
                <div class="img-box-zoom" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('images/pt/snack/opak.jpg') }}">
                    <h3 class="h2">Opak Gula Aren</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec parallax d-flex justify-content-center align-items-center" style="min-height: 200px">
    <a href="{{route('bintang.shop')}}" class="btn-belanja">Belanja Sekarang</a>
</section>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop