@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/treant.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="section">
        <div class="section-center">
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
    <section class="whitesec">
        <div class="container-fluid">
            <h1 class="text-center">Struktur Tim Cemerlang</h1>
            <div id="struktur-tim"> </div>
        </div>
    </section>
    <section class="graysec">
        <div class="container-fluid">
            <h1 class="text-center">Foto Tim</h1>
            <img src="{{asset('images/tim/tim.jpg')}}" class="img-fluid rounded mx-auto d-block w-75" alt="...">
        </div>
    </section>
    @stop
