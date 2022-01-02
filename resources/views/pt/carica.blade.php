@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner2">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Carica Cemerlang</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}

    <div class="container-fluid">
        <ul class="nav nav-tabs justify-content-center" data-aos="flip-down">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica') }}">Visi & Misi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/legalitas') }}">Legalitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/tentangproduk') }}">Tentang Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/fasilitas') }}">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/ekspansi') }}">Ekspansi Pemasaran & jaringan Kemitraan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/pencapaian') }}">Pencapaian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/galeri') }}">Gallery</a>
            </li>
        </ul>
    </div>
            @switch($sec)
                @case('legalitas')
                    @include('pt.carica.legalitas')
                    @break
                @case('tentangproduk')
                    @include('pt.carica.tentangproduk')
                    @break
                @case('fasilitas')
                    @include('pt.carica.fasilitas')
                    @break
                @case('ekspansi')
                    @include('pt.carica.ekspansi')
                    @break
                @case('pencapaian')
                    @include('pt.carica.pencapaian')
                    @break
                @case('galeri')
                    @include('pt.carica.galeri')
                    @break
                @default
                @include('pt.carica.visimisi')
            @endswitch
    @stop
    @section('customjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
        crossorigin="anonymous"></script>
    @stop
