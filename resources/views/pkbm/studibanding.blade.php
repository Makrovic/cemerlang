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
                            <h1>Observasi & Studi Banding</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container-fluid">
            <h3 class="title text-center">Observasi 1</h3>
            <div class="row">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-12 col-lg-4 col-sm-12">
                    <figure class="figure">
                        <a href="{{asset('images/carica.jpg')}}" data-lightbox="image-1">
                        <img src="{{asset('images/carica.jpg')}}" class="figure-img img-fluid rounded"></a>
                        <figcaption class="figure-caption">A caption for the above image.</figcaption>
                      </figure>
                </div>
                @endfor
            </div>
        </div>
    </section>
    @stop
    @section('customjs')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    @stop