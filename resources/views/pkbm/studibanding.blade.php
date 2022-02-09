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
            <h1 class="title text-center my-3" data-aos="fade-up">Pusat Magang</h1>
            <div class="d-flex flex-column align-items-center" data-aos="fade-up">
                <h5 class="text-center mt-4">Surat Permohonan dan Piagam Magang Prakerin, PSG dan PKL di
                    PKBM CEMERLANG</h5>
                <a href="{{ asset('images/pkbm/studibanding/suratmagang.jpg') }}" data-lightbox="image">
                    <img src="{{ asset('images/pkbm/studibanding/suratmagang.jpg') }}"
                        class="figure-img img-fluid rounded"></a>
                <h5 class="text-center mt-4">Dokumentasi Peserta Magang Prakerin, PSG dan PKL di PKBM
                    CEMERLANG</h5>
                <div class="row g-2">
                    <div class="col-sm-12 col-md-4">
                        <a href="{{ asset('images/pkbm/studibanding/magang_1.jpg') }}" data-lightbox="image">
                            <img src="{{ asset('images/pkbm/studibanding/magang_1.jpg') }}"
                                class="figure-img img-fluid rounded"></a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a href="{{ asset('images/pkbm/studibanding/magang_2.jpg') }}" data-lightbox="image">
                            <img src="{{ asset('images/pkbm/studibanding/magang_2.jpg') }}"
                                class="figure-img img-fluid rounded"></a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a href="{{ asset('images/pkbm/studibanding/magang_3.jpg') }}" data-lightbox="image">
                            <img src="{{ asset('images/pkbm/studibanding/magang_3.jpg') }}"
                                class="figure-img img-fluid rounded"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="container-fluid">
            <h1 class="title text-center my-3" data-aos="fade-up">Pusat Penelitian - Observasi</h1>
            <div class="d-flex flex-column align-items-center" data-aos="fade-up">
                <h5 class="text-center mt-4">PKBM CEMERLANG sebagai Pusat Penelitan-Observasi berbagai Universitas Negeri
                    dan Swasta :</h5>
                <ol>
                    <li>Universitas Negeri Semarang (UNNES)</li>
                    <li>Universitas Gadjah Mada (UGM)</li>
                    <li>Universitas Sains Al-Qur'an (UNSIQ)</li>
                    <li>Universitas Satya Wacana</li>
                    <li>dan sebagainya</li>
                </ol>
                <h5 class="text-center mt-4">Surat Permohonan Penelitian dan Observasi di PKBM CEMERLANG oleh berbagai
                    Universitas / Perguruan Tingi</h5>
                <a href="{{ asset('images/pkbm/studibanding/suratobservasi.jpg') }}" data-lightbox="image">
                    <img src="{{ asset('images/pkbm/studibanding/suratobservasi.jpg') }}"
                        class="figure-img img-fluid rounded text-center"></a>
                <h5 class="text-center mt-4">Dokumentasi Peserta Magang Prakerin, PSG dan PKL di PKBM
                    CEMERLANG</h5>
                <a href="{{ asset('images/pkbm/studibanding/observasi_1.jpg') }}" data-lightbox="image">
                    <img src="{{ asset('images/pkbm/studibanding/observasi_1.jpg') }}"
                        class="figure-img img-fluid rounded text-center"></a>
            </div>
            @foreach ($observasis as $observasi)
                <h5 class="text-center mt-4" data-aos="fade-up">{{ $observasi->judul }}</h5>
                <div class="row mb-4 g-2" data-aos="fade-up">
                    @for ($j = 1; $j <= 3; $j++)
                        <div class="col-sm-12 col-lg-4">
                            <a href="{{ asset('images/pkbm/studibanding/' . $observasi->foto . '_' . $j . '.jpg') }}"
                                data-lightbox="image-1">
                                <img src="{{ asset('images/pkbm/studibanding/' . $observasi->foto . '_' . $j . '.jpg') }}"
                                    class="figure-img img-fluid rounded"></a>
                        </div>
                    @endfor
                </div>
            @endforeach
        </div>
    </section>
    <section class="sec">
        <div class="container-fluid">
            <h1 class="title text-center my-3" data-aos="fade-up">Pusat Studi Banding</h1>
            <div class="row my-4 g-2" data-aos="fade-up">
                <h5 class="text-center mt-4">Permintaan Studi Banding di PKBM CEMERLANG oleh berbagai Instansi Pemerintahan,
                    Instansi Swasta, UMKM dan berbagai Organisasi meningkat secara signifikan</h5>
                <div class="col-sm-12 col-lg-6">
                    <a href="{{ asset('images/pkbm/studibanding/studibanding_1.jpg') }}" data-lightbox="image-2">
                        <img src="{{ asset('images/pkbm/studibanding/studibanding_1.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <a href="{{ asset('images/pkbm/studibanding/studibanding_2.jpg') }}" data-lightbox="image-2">
                        <img src="{{ asset('images/pkbm/studibanding/studibanding_2.jpg') }}"
                            class="figure-img img-fluid rounded"></a>
                </div>
            </div>
            @foreach ($studibandings as $studibanding)
                <h5 class="text-center mt-4" data-aos="fade-up">{{ $studibanding->judul }}</h5>
                <div class="row mb-4 g-2" data-aos="fade-up">
                    @for ($j = 1; $j <= 3; $j++)
                        <div class="col-sm-12 col-lg-4">
                            <a href="{{ asset('images/pkbm/studibanding/' . $studibanding->foto . '_' . $j . '.jpg') }}"
                                data-lightbox="image-2">
                                <img src="{{ asset('images/pkbm/studibanding/' . $studibanding->foto . '_' . $j . '.jpg') }}"
                                    class="figure-img img-fluid rounded"></a>
                        </div>
                    @endfor
                </div>
            @endforeach
        </div>
    </section>
    <section class="sec back-gray">
        <div class="container">
            <h1 class="title text-center my-3" data-aos="fade-up">Paket Studi Banding</h1>
            <div class="row g-3 my-3" data-aos="fade-up">
                <div class="col-sm-12 col-md-6">
                    <div class="card mb-3" style="height: 100%">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title text-danger">Paket IDR 50k</h5>
                            <p class="card-text">Snack<br>
                                Minum<br>
                                Konsumsi</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card mb-3" style="height: 100%">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('images/pkbm/studibanding/paket-75k.jpg') }}"
                                    class="figure-img img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Paket IDR 75k</h5>
                                    <p class="card-text">Snack Box<br>
                                        Minum<br>
                                        Nasi Box<br>
                                        Oleh-oleh Produk PKBM CEMERLANG :
                                        <li>1 pack Produk CARICA CEMERLANG (6 cup)</li>
                                        Goody Bag Kain / Kertas (menyesuaikan persediaan)
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card mb-3" style="height: 100%">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('images/pkbm/studibanding/paket-100k.jpg') }}"
                                    class="figure-img img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Paket IDR 100k</h5>
                                    <p class="card-text">Snack Box<br>
                                        Minum<br>
                                        Nasi Box<br>
                                        Oleh-oleh Produk PKBM CEMERLANG :
                                        <li>1 pack Produk CARICA CEMERLANG (6 cup)</li>
                                        <li>2 pack Produk BINTANG CEMERLANG SNACK</li>
                                        Goody Bag Kain / Kertas (menyesuaikan persediaan)
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="card mb-3" style="height: 100%">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('images/pkbm/studibanding/paket-150k.jpg') }}"
                                    class="figure-img img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger">Paket IDR 150k</h5>
                                    <p class="card-text">Snack Box<br>
                                        Minum<br>
                                        Nasi Box<br>
                                        Oleh-oleh Produk PKBM CEMERLANG :
                                        <li>1 pack Produk CARICA CEMERLANG (6 cup)</li>
                                        <li>2 pack Produk BINTANG CEMERLANG SNACK</li>
                                        Tas Pandan Etnik (Produk Handycraft PKBM CEMERLANG)
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
