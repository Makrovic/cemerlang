@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner" style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Belanja</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">

        </div>
    </section>
    @stop
        @section('customjs')
        <script src="{{ asset('js/lightbox.js') }}"></script>
        @stop
