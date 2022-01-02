@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="{{ asset('css/treant.css') }}" rel="stylesheet" type="text/css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/treant-js@1.0.1/Treant.css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Struktur Tim</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec" data-aos="fade-up">
        <div class="container-fluid">
            <h1 class="title text-center">Struktur Tim Cemerlang</h1>
            <div id="struktur-tim"> </div>
        </div>
    </section>
    <section class="sec back-gray" data-aos="fade-up">
        <div class="container-fluid">
            <h1 class="title text-center">Foto Tim</h1>
            <img src="{{asset('images/pkbm/tim/tim.jpg')}}" class="img-fluid rounded mx-auto d-block w-75" alt="...">
        </div>
    </section>
    @stop
    @section('customjs')
    <script src="https://cdn.jsdelivr.net/npm/treantjs@1.0.0/Treant.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/raphael@2.3.0/raphael.min.js"></script>
    <script src="{{ asset('js/strukturtim.js') }}"></script>
    @stop