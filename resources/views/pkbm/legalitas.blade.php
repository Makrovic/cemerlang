@extends('layout.base')
@section('meta_keywords', 'liputan,pkbm,pkbm cemerlang,liputan pkbm cemerlang wonosobo')
@section('meta_description', 'liputan PKBM CEMERLANG WONOSOBO')
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
                            <h1>Legalitas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container-fluid" data-aos="fade-up">
            <h5>PKBM CEMERLANG didirikan pada 2 November 2009 dan berdiri beroperasional pada 1 Januari 2010 dengan
                legalitas :</h5>
            <div class="row">
                <div class="col-md-8">
                    <ol>
                        <li>Akta Pendirian PKBM No. 2(02/11/2009) Notaris Sunarto SH. Mhum</li>
                        <li>Status Tanah - Gedung milik PKBM CEMERLANG Badan Pertanahan Nasional Kab. Wonosobo
                            <br>SHM No. 209 (1444/C/BPN/2010) dan No. 210 (1445/C/BPN/2010)
                        </li>
                        <li>Ijin Operasional PKBM SK Dinas Pendidikan No. 421/022.b/2010</li>
                        <li>Perpanjangan Ijin Operasional PKBM SK Dinas Pendidikan No. 421/014.B/2014</li>
                        <li>SK Pemerintah Daerah No. 529/17/DS.K/IX/2010 tentang Keterangan Domisili PKBM menetap</li>
                        <li>NPWP No. 21.130.343.3-533.000 atas nama PKBM CEMERLANG</li>
                        <li>NILEM PKBM Indonesia No. 33.1.29.4.1.0002</li>
                        <li>NPSN PKBM Indonesia No. No. P2963717 / P2970164</li>
                        <li>Akreditasi Lembaga SK Badan Akreditasi PNF No. 021/K.1/SK/AKR/2013</li>
                        <li>Terakreditasi A Program . SK Badan Akreditasi Nasional No. 156/BAN PAUD dan PNF/AKR/2018
                        </li>
                        <li>Rekening PKBM BRI No. 0112-01-023972-59-8 atas nama PKBM CEMERLANG</li>
                        <li>Rekening PKBM Bank Jateng No. 2-023-04057-6 atas nama PKBM CEMERLANG</li>
                        <li>Rekening PKBM Bank Mandiri No. 136-000-909999-2 atas nama PKBM CEMERLANG</li>
                        <li>No. PDAM 0702010033 atas nama PKBM CEMERLANG </li>
                        <li>No. Meter Listrik (PLN) 86000165398 IDPEL 522050946258 atas nama PKBM CEMERLANG</li>
                        <li>No. Telepon (TELKOM) 0286-322634 atas nama PKBM CEMERLANG</li>
                        <li>Internet (TELKOM) 0142-373100923 atas nama PKBM CEMERLANG</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="sec back-gray">
        <div class="container-fluid" data-aos="fade-up">
            <div class="d-flex flex-md-row flex-column justify-content-center align-items-center">
                <a href="{{ asset('images/pkbm/legalitas/akreditasi.jpg') }}" class="m-2"
                    data-lightbox="image-1">
                    <img src="{{ asset('images/pkbm/legalitas/akreditasi.jpg') }}" class="figure-img img-fluid rounded"
                        style="max-height: 560px"></a>
                <a href="{{ asset('images/pkbm/legalitas/nilaiakreditasi.jpg') }}" class="m-2"
                    data-lightbox="image-1">
                    <img src="{{ asset('images/pkbm/legalitas/nilaiakreditasi.jpg') }}"
                        class="figure-img img-fluid rounded" style="max-height: 560px"></a>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
