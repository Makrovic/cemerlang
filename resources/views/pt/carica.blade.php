@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="pendaftaran-banner">
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
                <a class="nav-link" href="{{ url('') }}">Visi & Misi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Legalitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Tentang Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Fasilitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Ekspansi Pemasaran & jaringan Kemitraan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Pencapaian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('') }}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="{{ url('') }}"></a>
            </li>
        </ul>
    </div>
    <section class="sec">
        <div class="container">
            @switch($sec)
                @case('fasilitas')
                    @include('pt.carica.fasilitas')
                    @break
                @case('legalitas')
                    @include('pt.carica.legalitas')
                    @break
                @default
                @include('pt.carica.visimisi')
            @endswitch
        </div>
    </section>
    @stop
    @section('customjs')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    @stop
