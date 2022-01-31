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
                        <h1>Liputan Media & Narasumber</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Liputan Media</h1>
        <div class="my-5" data-aos="fade-up">
            <h5>Liputan Media Cetak : </h5>
            <p>Jawa Pos, Suara Merdeka, Wonosobo Express, Majalah Aksara Kemendikbud, Kompas, Buku Pelangi PAUDNI,
                Buku SoboNdeso, Majalah MISI Kemendikbud dan sebagainya</p>
            <div class="horizontal-scroll swiper sw-dokumentasi">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 6; $i++) <div class="swiper-slide">
                        <a href="{{ asset('images/pkbm/liputan/liputan-cetak' . $i . '.jpg') }}"
                            data-lightbox="image-1">
                            <img class="flex-auto img-fluid rounded"
                                src="{{ asset('images/pkbm/liputan/liputan-cetak' . $i . '.jpg') }}"></a></div>
                @endfor
            </div>
        </div>
    </div>
    <div class="my-5" data-aos="fade-up">
        <h5>Liputan Media Elektronik : </h5>
        <ol>
            <li>Liputan pada website Direktorat Pembinaan SMP Dirjen Dikdas Kemendikbud</li>
            <li>Liputan Apresiasi PTK pada website Dinas Pendidikan Provinsi Jawa Tengah</li>
            <li>Liputan pada website HUMAS Setda Wonosobo</li>
            <li>Liputan pada website Dharma Wanita</li>
            <li>Liputan Produk PKBM CEMERLANG pada website BPPOM Jateng</li>
            <li>Dan sebagainya</li>
        </ol>
        <div class="row">
            <div class="col-6">
                <a href="{{ asset('images/pkbm/liputan/liputan-el1.jpg') }}" data-lightbox="image-2">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/liputan/liputan-el1.jpg') }}"></a>
            </div>
            <div class="col-6">
                <a href="{{ asset('images/pkbm/liputan/liputan-el2.jpg') }}" data-lightbox="image-2">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/liputan/liputan-el2.jpg') }}"></a>
            </div>
        </div>

    </div>
    <div class="my-5" data-aos="fade-up">
        <h5>Liputan Media Televisi : </h5>
        <ol>
            <li>Dialog Interaktif Wirausaha Muda pada Stasiun TVRI Semarang</li>
            <li>Liputan Kegiatan dan produktivitas CARICA CEMERLANG pada acara Laptop Si Unyil Trans Tv</li>
            <li>Liputan Pengelolaan PKBM oleh TV One</li>
            <li>Liputan Prestasi PKBM di TV Edukasi dan sebagainya</li>
        </ol>
        <div class="row">
            <div class="col-4">
                <a href="{{ asset('images/pkbm/liputan/liputan-tv1.jpg') }}" data-lightbox="image-3">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/liputan/liputan-tv1.jpg') }}"></a>
            </div>
            <div class="col-4">
                <a href="{{ asset('images/pkbm/liputan/liputan-tv2.jpg') }}" data-lightbox="image-3">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/liputan/liputan-tv2.jpg') }}"></a>
            </div>
            <div class="col-4">
                <a href="{{ asset('images/pkbm/liputan/liputan-tv3.jpg') }}" data-lightbox="image-3">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/liputan/liputan-tv3.jpg') }}"></a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="sec back-gray">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Narasumber Nasional</h1>
        <div class="my-5" data-aos="fade-up">
            <h5>Liputan Media Cetak : </h5>
            <p>anggilan Narasumber keterampilan / kursus / pelatihan dari berbagai kalangan, kelompok, instansi
                pemerintah, instansi swasta dan organisasi kepada PKBM CEMERLANG meningkat secara signifikan.</p>
            <ol>
                <li>PKBM CEMERLANG sebagai Narasumber Keterampilan Berbasis Kewirausahaan yang diselenggarakan
                    Direktorat Pembinaan SMP Kemendikbud RI</li>
                <li>PKBM CEMERLANG selaku Narasumber BINTEK LIFESKILL Instruktur pada kegiatan yang diselenggarakan
                    Pemerintah Provinsi Jawa Tengah</li>
                <li>PKBM CEMERLANG selaku Narasumber Best Practice Pengelolaan Lembaga PNF dalam Bintek atau Workshop
                    yang diselenggarakan Subdit Sarpras Direktorat Pembinan Pendidikan Masyarakat KEMENDIKBUD RI</li>
                <li>PKBM CEMERLANG selaku Narasumber di Dharma Wanita</li>
                <li>PKBM CEMERLANG selaku Narasumber di Badan KB</li>
                <li>PKBM CEMERLANG selaku Narasumber di PKK</li>
                <li>PKBM CEMERLANG selaku Narasumber di PGRI</li>
                <li>PKBM CEMERLANG selaku Narasumber berbagai Karangtaruna</li>
                <li>PKBM CEMERLANG selaku Narasumber PNPM Perdesaan dan Perkotaan</li>
                <li>PKBM CEMERLANG selaku Narasumber di Bhayangkari dan Warakawuri</li>
                <li>dan sebagainya</li>
            </ol>
            <div class="swiper sw-dokumentasi" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 6; $i++) <div class="swiper-slide">
                        <a href="{{ asset('images/pkbm/narasumber/narsum' . $i . '.jpg') }}" data-lightbox="image-4">
                            <img class="flex-auto img-fluid rounded"
                                src="{{ asset('images/pkbm/narasumber/narsum' . $i . '.jpg') }}"></a></div>
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