@extends('layout.base')
@section('meta_keywords', 'carica,snack,carica cemerlang,bintang cemerlang snack,bintang cemerlang indonesia')
@section('meta_description', 'Carica Cemerlang - BINTANG CEMERLANG INDONESIA')
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
                <a class="nav-link" href="{{ url('bintang/carica') }}">Legalitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/tentangproduk') }}">Tentang Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/fasilitas') }}">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/ekspansi') }}">Ekspansi Pemasaran & jaringan
                    Kemitraan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/achievement') }}">Achievement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bintang/carica/expo') }}">Expo</a>
            </li>
        </ul>
    </div>
    @switch($sec)
        @case('tentangproduk')
            @include('pt.carica.tentangproduk')
        @break
        @case('fasilitas')
            @include('pt.carica.fasilitas')
        @break
        @case('ekspansi')
            @include('pt.carica.ekspansi')
        @break
        @case('achievement')
            @include('pt.carica.achievement')
        @break
        @case('expo')
            @include('pt.carica.expo')
        @break
        @default
            @include('pt.carica.legalitas')
    @endswitch
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
