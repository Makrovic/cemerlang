@extends('layout.base')
@section('meta_keywords', 'testimoni,pkbm,pkbm cemerlang,testimoni pkbm cemerlang wonosobo')
@section('meta_description', 'testimoni PKBM CEMERLANG WONOSOBO')
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
                            <h1>Testimoni & Success Story</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <h1 class="title text-center" data-aos="fade-up">Testimoni</h1>
            <div class="swiper sw-oneslide" data-aos="fade-up" style="cursor: default">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="swiper-slide">
                            @foreach ($testimonis->slice($i * 3, 3) as $testi)
                                <div class="card border-secondary m-3" data-aos="fade-up">
                                    <div class="card-body">
                                        <div
                                            class="row {{ $testi->id % 2 == 0 ? 'flex-row-reverse text-end' : 'flex-row' }}  justify-content-center">
                                            <div class="col-auto">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/pkbm/testimoni/' . $testi->foto . '.jpg') }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-12">
                                                <p class="m-0"><i class="fa fa-quote-right"
                                                        aria-hidden="true"></i></p>
                                                <p class="card-text fst-light">
                                                    {{ $testi->testimoni }}
                                                </p>
                                                <h5 class="card-title">{{ $testi->nama }}</h5>
                                                <p class="fst-italic text-muted">{{ $testi->keterangan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <h1 class="title text-center" data-aos="fade-up">Success Story</h1>
        <div class="row" data-aos="fade-up" style="cursor: default">
            @foreach ($alumnis as $alu)
                <div class="col-lg-4 col-md-12">
                    <div class="card border-dark mb-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img class="img-fluid"
                                        src="{{ asset('images/pkbm/alumni/' . $alu->foto . '.jpg') }}" alt="...">
                                </div>
                                <div class="col">
                                    <p><b>Nama : </b>{{ $alu->nama }}<br>
                                        <b>TTL : </b>{{ $alu->ttl }}<br>
                                        <b>Alamat : </b>{{ $alu->alamat }}<br>
                                        <b>Alumni : </b>{{ $alu->alumni }}<br>
                                        <b>Ket : </b>{{ $alu->keterangan }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center" data-aos="fade-up">
            {{ $alumnis->links() }}
        </div>
        </div>
    </section>
@stop
