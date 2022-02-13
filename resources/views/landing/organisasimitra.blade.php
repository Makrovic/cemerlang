@extends('layout/base-landing')
@section('content')
    {{-- section --}}
    <section class="pkbm" id="pkbm">
        <div class="container">
            <h1 class="text-center">ORGANISASI MITRA</h1>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-fkpkbm.png') }}" class="img-fluid"
                        style="max-height: 100px"> DPP FK PKBM Indonesia </h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Dewan Pengurus Pusat FK PKBM Indonesia</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_fkpkbm' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_fkpkbm' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-iwapiwsb.png') }}" class="img-fluid"
                        style="max-height: 100px"> DPC IWAPI Kabupaten Wonosobo </h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Wakil Ketua Umum (WKU) 1 DPC IWAPI Kabupaten Wonosobo
                </h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_iwapiwsb' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_iwapiwsb' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-iwapijateng.png') }}" class="img-fluid"
                        style="max-height: 100px"> DPD IWAPI Provinsi Jawa Tengah</h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Wakil Komite Tetap Bidang Perindustrian DPD IWAPI
                    Provinsi Jawa Tengah</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_iwapijateng' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_iwapijateng' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-permadani.png') }}" class="img-fluid"
                        style="max-height: 100px"> DPD PERMADANI Kabupaten Wonosobo</h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Bendahara DPD PERMADANI Kabupaten Wonosobo</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_permadani' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_permadani' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-aphw.png') }}" class="img-fluid"
                        style="max-height: 100px"> APHW (Asosiasi Pengusaha Halal Wonosobo)</h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Sekretaris APHW</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_aphw' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_aphw' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-kadinwsb.png') }}" class="img-fluid"
                        style="max-height: 100px"> DPD KADIN Kabupaten Wonosobo </h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Pengurus KADIN</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 5; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_kadinwsb' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_kadinwsb' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="my-3" data-aos="fade-up">
                <h3><img src="{{ asset('images/organisasimitra/logo-bhayangkari.png') }}" class="img-fluid"
                        style="max-height: 100px"> BHAYANGKARI</h3>
                <h5>Pimpinan PKBM CEMERLANG (Anna Wardiyati) merupakan Anggota Bhayangkari Cabang Wonosobo Daerah Jawa
                    Tengah</h5>
                <div class="swiper sw-dokumentasi">
                    <div class="swiper-wrapper">
                        @for ($i = 1; $i <= 7; $i++)
                            <div class="swiper-slide">
                                <a href="{{ asset('images/organisasimitra/mitraorganisasi_bhayangkari' . $i . '.jpg') }}"
                                    data-lightbox="image-1">
                                    <div style="height: 280px">
                                        <img class="flex-auto img-fluid rounded"
                                            src="{{ asset('images/organisasimitra/mitraorganisasi_bhayangkari' . $i . '.jpg') }}"
                                            style="height: 100%; width: 100%; object-fit: cover;">
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
