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
            @for ($i = 1; $i <= 6; $i++)
            <h3 class="title text-center">Observasi</h3>
            <div class="row">
                @for ($j = 1; $j <= 3; $j++)
                <div class="col-12 col-lg-4 col-sm-12">
                        <a href="{{asset('images/pkbm/studibanding/observasi'.$i.'_'.$j.'.jpg')}}" data-lightbox="image-1">
                        <img src="{{asset('images/pkbm/studibanding/observasi'.$i.'_'.$j.'.jpg')}}" class="figure-img img-fluid rounded"></a>
                </div>
                @endfor
            </div>
            @endfor
            <h3 class="title text-center">Studibanding</h3>
            <div class="row">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-12 col-lg-4 col-sm-12">
                        <a href="{{asset('images/pkbm/studibanding/studibanding'.$i.'.jpg')}}" data-lightbox="image-1">
                        <img src="{{asset('images/pkbm/studibanding/studibanding'.$i.'.jpg')}}" class="figure-img img-fluid rounded"></a>
                </div>
                @endfor
            </div>
        </div>
    </section>
    @stop
    @section('customjs')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    @stop