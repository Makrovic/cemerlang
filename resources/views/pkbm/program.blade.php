@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Program PKBM</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="whitesec program">
        <div class="container-fluid">
            <ul class="nav nav-tabs justify-content-center" data-aos="flip-down">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#content1" role="button" aria-expanded="false"
                        aria-controls="content1">Paket B (Setara SMP)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#content2" role="button" aria-expanded="false"
                        aria-controls="content2">Paket C (Setar SMA)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Program Kuliah Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Program Keterampilan/Kursus/Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Program Pemberdayaan Perempuan</a>
                </li>
            </ul>
            <div class="row justify-content-center align-items-center">
                <div class="col col-md-5 collapse" id="content1">
                    <h1 text-center>Pendidikan Kesetaraan Paket B (Setara SMP)</h1>
                    <div id="accord-paketb" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="cara">
                                <h5 class="mb-0">
                                    <a href="#content-cara">
                                        <i class="fas fa-tasks m-2"></i>
                                        <span class="text-break">
                                            Cara Mendaftar Pendidikan Kesetaraan Paket B
                                        </span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="biaya">
                                <h5 class="mb-0">
                                    <a href="#content-cara">
                                        <i class="fas fa-coins m-2"></i>
                                        <span class="text-break">
                                        Biaya Program Pendidikan Kesetaraan Paket B
                                        </span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="jadwal">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accord-paketb" href="#content-jadwal"
                                        aria-expanded="true" aria-controls="content-biaya">
                                        <i class="fas fa-calendar m-2"></i>
                                        <span class="text-break">
                                        Jadwal Kegiatan Pembelajaran Pendidikan Kesetaraan Paket B
                                        </span>
                                    </a>
                                </h5>
                            </div>
                            <div id="content-jadwal" class="collapse in" role="tabpanel" aria-labelledby="jadwal">
                                <div class="card-body">
                                    jadwal
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="dokumentasi">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accord-paketb" href="#content-dokumentasi"
                                        aria-expanded="true" aria-controls="content-biaya">
                                        <i class="fas fa-photo-video m-2"></i>
                                        <span class="text-break">
                                        Dokumentasi
                                        </span>
                                    </a>
                                </h5>
                            </div>
                            <div id="content-dokumentasi" class="collapse in" role="tabpanel"
                                aria-labelledby="dokumentasi">
                                <div class="card-body">
                                    foto
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="content2">
                    paket c
                </div>
            </div>
        </div>
    </section>
    @stop
