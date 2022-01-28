@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/home-pt.css') }}" rel="stylesheet" type="text/css">
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
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
</div>
{{-- endbanner --}}

{{-- section --}}
<section class="sec back-primaryc">
    <div class="container">
        <h1 data-aos="fade-up">UNIT BISNIS</h1>
        <h5 data-aos="fade-up">Unit bisnis kami : </h5>
        <div class="row g-3 justify-content-center my-4 text-center">
            <div class="col-12 col-sm-4">
                <div class="img-box-zoom rounded" data-aos="zoom-in" data-aos-delay="600">
                    <a href="#home-carica">
                        <img class="img-fluid" src="{{ asset('images/pt/carica/carica1.jpg') }}">
                        <h3 class="h2">Carica Cemerlang</h3>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="img-box-zoom rounded" data-aos="zoom-in" data-aos-delay="400">
                    <a href="#home-snack">
                        <img class="img-fluid" src="{{ asset('images/pt/snack/snack.jpg') }}">
                        <h3 class="h2">Bintang Cemerlang Snack</h3>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="img-box-zoom rounded" data-aos="zoom-in" data-aos-delay="200">
                    <a href="#home-craft">
                        <img class="img-fluid" src="{{ asset('images/pt/craft/craft1.jpg') }}">
                        <h3 class="h2">Claster Craft Cemerlang</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec back-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="hover-box text-center" data-aos="zoom-in">
                    <div class="icon-box align-middle my-3"><i class="fas fa-thumbs-up"></i></div>
                    <h5>Rasa Otentik</h5>
                    <p>Bahan baku utama Produk Cemerlang disuplai langsung oleh petani terbaik di Kabupaten Wonosobo
                        melalui proses sortir.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="hover-box text-center">
                    <div class="icon-box align-middle my-3"><i class="fas fa-seedling"></i></div>
                    <h5>Tanpa Pengawet</h5>
                    <p>Produk Cemerlang menggunakan 0% pengawet maupun bahan tambahan pangan lainnya untuk menjaga
                        kualitas rasa dan produk.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="hover-box text-center">
                    <div class="icon-box align-middle my-3"><i class="fas fa-headset"></i></div>
                    <h5>Pelayanan Prima</h5>
                    <p>Produk Cemerlang yang dipesan selalu dicek kelayakannya untuk mengedepankan kepuasan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec" id="home-carica">
    <div class="container">
        <div class="row g-3 flex-row justify-content-center" data-aos="fade-up">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                <h1>Carica Cemerlang</h1>
                <p>Industri Minuman Buah Carica</p>
            </div>
        </div>
    </div>
</section>
<section class="sec back-gray" id="home-snack">
    <div class="container">
        <div class="row g-3 flex-row-reverse text-end justify-content-center" data-aos="fade-up">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="{{ asset('images/pt/snack/snack.jpg') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                <h1>Bintang Cemerlang Snack</h1>
                <p>Industri Makanan Berbahan Potensi Lokal</p>
            </div>
        </div>
    </div>
</section>
<section class="sec" id="home-craft">
    <div class="container">
        <div class="row g-3 justify-content-center" data-aos="fade-up">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="{{ asset('images/pt/craft/craft1.jpg') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                <h1>Claster Craft Cemerlang</h1>
                <p>Industri Aneka Kerajinan</p>
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
                    @for ($i = 1; $i <= 6; $i++) <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <a href="{{ asset('images/pt/galeri/' . $i . '.jpg') }}" data-lightbox="image-1">
                            <img class="flex-auto img-fluid rounded"
                                src="{{ asset('images/pt/galeri/' . $i . '.jpg') }}"></a>
                </div>
                @endfor
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
</section>
<section class="sec parallax d-flex justify-content-center align-items-center" style="min-height: 200px">
    <a href="{{route('bintang.shop')}}" class="btn-belanja">Belanja Sekarang</a>
</section>
{{-- endsection --}}
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop