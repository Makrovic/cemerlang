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
                        <h1>Fasilitas</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- endbanner --}}
<section class="sec">
    <div class="container-fluid" data-aos="fade-up">
        <h5>Fasilitas :</h5>
        <div class="row">
            <div class="col-md-8">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Sarana Prasarana
                        Representatif</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Laboratorium
                        Komputer
                    </li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Peralatan dan
                        Bahan
                        Keterampilan lengkap</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Pendidik dan
                        Tenaga
                        Kependidikan sesuai Kompetensi</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Peseta Didik
                        mendapatkan pendampingan Usaha</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Peserta didik ditempatkan
                        Kerja pada DU/DI (Dunia Usaha / Dunia Industri)</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Ijazah Nasional
                        yang
                        diterbitkan oleh Pemerintah atau Negara</li>
                    <li><span class="fa-li"><i class="bullet fas fa-check-circle"></i></span>Sertifikat
                        Kompetensi
                        sesuai Bidang Keterampilan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec">
    <div class="container-fluid">
        <div class="row g-2" data-aos="fade-up">
            @for ($i = 1; $i <= 4; $i++) <div class="col-sm-12 col-lg-6">
                <a href="{{ asset('images/pkbm/fasilitas/fasilitas' . $i . '.jpg') }}" data-lightbox="image-1">
                    <img class="flex-auto img-fluid rounded"
                        src="{{ asset('images/pkbm/fasilitas/fasilitas' . $i . '.jpg') }}"></a>
        </div>
        @endfor
    </div>
    </div>
</section>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop