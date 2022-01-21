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
                        <h1>Claster Craft Cemerlang</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
<section class="sec">
    <div class="container-fluid">
        <h1 class="title text-center">Produk Kami</h1>
        <div class="row" data-masonry='{"percentPosition": true }'>
            @for ($i = 1; $i <= 5; $i++) <div class="col-sm-6 col-lg-4 mb-4">
                <a href="{{ asset('images/pt/craft/craft' . $i . '.jpg') }}" data-lightbox="image-2">
                    <img src="{{ asset('images/pt/craft/craft' . $i . '.jpg') }}" class="figure-img img-fluid rounded"
                        style="max-height: 560px"></a>
        </div>
        @endfor
    </div>
    </div>
</section>
<section class="sec parallax d-flex justify-content-center align-items-center" style="min-height: 200px">
    <a href="{{route('bintang.shop')}}" class="btn-belanja">Belanja Sekarang</a>
</section>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous">
</script>
@stop