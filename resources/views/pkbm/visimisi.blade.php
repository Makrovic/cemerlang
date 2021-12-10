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
                            <h1>Visi & Misi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <div class="row d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-delay="200">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center text-center"
                    data-aos="fade-up">
                    <h1 class="title">Visi</h1>
                    <p><i>Siap mengantarkan masyarakat cerdas & terampil</i></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center mb-3">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="title text-center">Misi</h1>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>
                            Memberikan layanan terbaik & bermanfaat bagi masyarakat</li>
                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>
                            Menumbuhkan sikap hidup masyarakat yang mandiri, produktif & berprestasi cemerlang
                            melalui pendidikan, pelatihan, keterampilan & kewirausahaan</li>
                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>
                            Memperluas jejaring kemitraan yang berkualitas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @stop
