@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/home-pt.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/imagehover.min.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')

    {{-- banner --}}
    <div class="sw-bannerpt">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div id="banner" class="banner" style="background-image: url('../images/pkbm/banner1.jpg')">
                    <div class="banner-hero">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5" data-aos="fade-right">
                                    <div class="banner-title">
                                        <h1>PT Bintang Cemerlang Jaya Sentosa</h1>
                                        <p>bintang cemerlang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div id="banner" class="banner" style="background-image: url('../images/pt/banner2.jpg')">
                    <div class="banner-hero">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="banner-title">
                                        <h1>Carica Cemerlang</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div id="banner" class="banner" style="background-image: url('../images/pt/banner3.jpg')">
                    <div class="banner-hero">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="banner-title">
                                        <h1>Bintang Cemerlang Snack</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    {{-- endbanner --}}

    {{-- section --}}
    <section class="sec back-primaryc">
        <div class="container">
            <h1>UNIT BISNIS</h1>
            <h5>Unit bisnis kami : </h5>
            <div class="row justify-content-center my-4 text-center">
                <div class="col-12 col-sm-4">
                    <figure class="imghvr-zoom-in rounded">
                        <img src="{{ asset('images/pt/carica/carica.jpg') }}" alt=""
                        class="img-fluid rounded">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2 class="align-middle">Carica Cemerlang</h2>
                        </figcaption>
                        <a href="#home-carica"></a>
                      </figure>
                </div>
                <div class="col-12 col-sm-4">
                    <figure class="imghvr-zoom-in">
                        <img src="{{ asset('images/pt/snack/snack.jpg') }}" alt=""
                        class="img-fluid rounded">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2 class="align-middle">Bintang Cemerlang Snack</h2>
                        </figcaption>
                        <a href="#home-snack"></a>
                      </figure>
                </div>
                <div class="col-12 col-sm-4">
                    <figure class="imghvr-zoom-in">
                        <img src="{{ asset('images/pt/craft/craft.jpg') }}" alt=""
                        class="img-fluid rounded">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2 class="align-middle">Claster Craft Cemerlang</h2>
                        </figcaption>
                        <a href="#home-craft"></a>
                      </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="sec" id="home-carica">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4" data-aos="fade-left">
                    <img src="{{ asset('images/pt/carica/carica.jpg') }}" alt=""
                        class="img-fluid rounded my-4">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <h1>Carica Cemerlang</h1>
                    <p>PKMB Cermerlang memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec back-gray" id="home-snack">
        <div class="container">
            <div class="row flex-row-reverse text-end justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4" data-aos="fade-left">
                    <img src="{{ asset('images/pt/snack/snack.jpg') }}" alt=""
                        class="img-fluid rounded my-4">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <h1>Bintang Cemerlang Snack</h1>
                    <p>PKMB Cermerlang memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec" id="home-craft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6 my-4" data-aos="fade-right">
                    <img src="{{ asset('images/pt/craft/craft.jpg') }}" alt=""
                        class="img-fluid rounded my-4">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 my-4 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <h1>Claster Craft Cemerlang</h1>
                    <p>PKMB Cermerlang memberikan pendidikan kesetaraan paket b dan c,
                        juga program keterampilan dan kursus yang mampu mengasah
                        skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec back-gray">
        <div class="container">
            <div class="row text-center" data-aos="fade-up">
                <h1>Galeri</h1>
            </div>
            <div class="row mt-5" data-aos="fade-up">
                <div class="swiper sw-galeri">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 6; $i++)
                        <div class="swiper-slide d-flex justify-content-center align-items-center">
                            <a href="{{asset('images/pt/galeri/'.$i.'.jpg')}}" data-lightbox="image-1">
                            <img class="flex-auto img-fluid rounded" src="{{ asset('images/pt/galeri/'.$i.'.jpg') }}"></a>
                        </div>
                        @endfor
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- endsection --}}
    @stop
    @section('customjs')
    <script src="{{ asset('js/lightbox.js') }}"></script>
    @stop