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
            <h1 class="title text-center my-3" data-aos="fade-up">Observasi</h1>
            @foreach($observasis as $observasi)
                <h3 class="text-center mt-4" data-aos="fade-up">{{ $observasi->judul }}</h3>
                <div class="row mb-4" data-aos="fade-up">
                    @for($j = 1; $j <= 3; $j++)
                        <div class="col-12 col-lg-4 col-sm-12">
                            <a href="{{ asset('images/pkbm/studibanding/'.$observasi->foto.'_'.$j.'.jpg') }}"
                                data-lightbox="image-1">
                                <img src="{{ asset('images/pkbm/studibanding/'.$observasi->foto.'_'.$j.'.jpg') }}"
                                    class="figure-img img-fluid rounded"></a>
                        </div>
                    @endfor
                </div>
            @endforeach
            <h1 class="title text-center my-3" data-aos="fade-up">Studi Banding</h1>
            @foreach($studibandings as $studibanding)
                <h3 class="text-center mt-4" data-aos="fade-up">{{ $studibanding->judul }}</h3>
                <div class="row mb-4" data-aos="fade-up">
                    @for($j = 1; $j <= 3; $j++)
                        <div class="col-12 col-lg-4 col-sm-12">
                            <a href="{{ asset('images/pkbm/studibanding/'.$studibanding->foto.'_'.$j.'.jpg') }}"
                                data-lightbox="image-1">
                                <img src="{{ asset('images/pkbm/studibanding/'.$studibanding->foto.'_'.$j.'.jpg') }}"
                                    class="figure-img img-fluid rounded"></a>
                        </div>
                    @endfor
                </div>
            @endforeach
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stop
