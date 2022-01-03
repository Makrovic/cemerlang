@extends('layout.base')
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
                <a class="nav-link" href="{{ url('pkbm/program') }}">Paket B (Setara SMP)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('pkbm/program/paketc') }}">Paket C (Setara
                    SMA)</a>
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
        @default
            @include('pkbm.program.paketb')
    @endswitch
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
