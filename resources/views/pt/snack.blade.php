@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="pendaftaran-banner" style="background-image: url('../images/pt/banner3.jpg')">
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
            <div class="row g-3">
                <div class="col-6">
                    <div>
                        <img class="img-fluid" src="{{asset('images/pt/snack/petos.jpg')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <img class="img-fluid" src="{{asset('images/pt/snack/jamur.jpg')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <img class="img-fluid" src="{{asset('images/pt/snack/kedele.jpg')}}">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <img class="img-fluid" src="{{asset('images/pt/snack/piscok.jpg')}}">
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <img class="img-fluid" src="{{asset('images/pt/snack/opak.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
    @section('customjs')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    @stop
