@extends('layout.base')
@section('meta_keywords', 'program,pkbm,pkbm cemerlang,program pkbm cemerlang wonosobo,paket b, paket c, kursus,
    keterampilan, pemberdayaan wanita, wonosobo')
@section('meta_description', 'program PKBM CEMERLANG WONOSOBO')
@section('customcss')
    <link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
    {{-- banner --}}
    <div id="banner" class="banner">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Program PKBM</h1>
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
                <a class="nav-link" href="{{ url('pkbm/program') }}">Paket B</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/paketc') }}">Paket C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/kuliahkerja') }}">Program
                    Kuliah Kerja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/kursus') }}">Program
                    Keterampilan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/pemberdayaanperempuan') }}">Program
                    Pemberdayaan Perempuan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/keaksaraan') }}">Program Keaksaraan</a>
            </li>
        </ul>
    </div>
    @switch($sec)
        @case('paketc')
            @include('pkbm.program.paketc')
        @break
        @case('kuliahkerja')
            @include('pkbm.program.kuliahkerja')
        @break
        @case('kursus')
            @include('pkbm.program.kursus')
        @break
        @case('perempuan')
            @include('pkbm.program.perempuan')
        @break
        @case('keaksaraan')
            @include('pkbm.program.keaksaraan')
        @break
        @default
            @include('pkbm.program.paketb')
    @endswitch
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
