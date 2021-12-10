@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="pendaftaran-banner">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Informasi Pendaftaran</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container-fluid">
            <h1 class="title text-center" data-aos="fade-up">Cara mendaftar Program Pendidikan Kesetaraan</h1>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="card card-b" data-aos="fade-right">
                        <div class="card-header">
                            Paket B
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cara mendaftar Kelas Baru: </h5>
                            <ol>
                                <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                                <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                                </li>
                                <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                    <ul>
                                        <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                                class="badge bg-primary">background biru</span>.<br>
                                            Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                        <li>FC legalisir ijazah dan <b>SKHUN SD/MI/Paket A</b> (3 lembar)</li>
                                        <li>FC legalisir akta kelahiran (3 lembar)</li>
                                        <li>FC kartu keluarga (3 lembar)</li>
                                        <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                    </ul>
                                </li>
                            </ol>
                            <h5 class="card-title">Cara mendaftar Kelas Lanjutan / Pindahan : </h5>
                            <ol>
                                <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                                <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                                </li>
                                <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                    <ul>
                                        <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                                class="badge bg-primary">background biru</span>.<br>
                                            Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                        <li>FC legalisir ijazah dan <b>SKHUN SD/MI/Paket A</b> (3 lembar)</li>
                                        <li>FC legalisir akta kelahiran (3 lembar)</li>
                                        <li>FC kartu keluarga (3 lembar)</li>
                                        <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                    </ul>
                                <li>Raport SMP/MTs/Setara untuk Pendaftar Pindahan atau Kelas Lanjutan
                                    <ul>
                                        <li>Raport kelas 1 dari sekolah sebelumnya untuk mendaftar di kelas 2</li>
                                        <li>Raport kelas 1 dan 2 dari sekolah sebelumnya untuk mendaftar di kelas 3</li>
                                    </ul>
                                </li>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card card-c" data-aos="fade-left">
                        <div class="card-header">
                            Paket C
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cara mendaftar Kelas Baru : </h5>
                            <ol>
                                <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                                <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                                </li>
                                <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                    <ul>
                                        <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                                class="badge bg-warning">background kuning</span>.<br>
                                            Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                        <li>FC legalisir ijazah dan <b>SKHUN SMP/MTs/Paket B/setara</b> (3 lembar)</li>
                                        <li>FC legalisir akta kelahiran (3 lembar)</li>
                                        <li>FC kartu keluarga (3 lembar)</li>
                                        <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                    </ul>
                                </li>
                            </ol>
                            <h5 class="card-title">Cara mendaftar Kelas Lanjutan / Pindahan : </h5>
                            <ol>
                                <li>Calon peserta didik mengisi formulir yang sudah disediakan</li>
                                <li>Calon peserta didik menandatangani Surat Perjanjuan Kontrak Belajar bermaterai cukup
                                </li>
                                <li>Calon peserta didik menyerahkan dokumen persyaratan pendaftaran sebagai berikut :
                                    <ul>
                                        <li>Pas foto resmi menggunakan kemeja putih, berdasi, dan berjas, <span
                                                class="badge bg-warning">background kuning</span>.<br>
                                            Ukuran 2x3 (10 lembar) dan 2x4 (10 lembar)</li>
                                        <li>FC legalisir ijazah dan <b>SKHUN SMP/MTs/Paket B/setara</b> (3 lembar)</li>
                                        <li>FC legalisir akta kelahiran (3 lembar)</li>
                                        <li>FC kartu keluarga (3 lembar)</li>
                                        <li>FC KTP/NIK khusus yang berusia di atas 17 tahun (3 lembar)</li>
                                    </ul>
                                </li>
                                <li>Raport SMP/MTs/Setara untuk Pendaftar Pindahan atau Kelas Lanjutan
                                    <ul>
                                        <li>Raport kelas 1 dari sekolah sebelumnya untuk mendaftar di kelas 2</li>
                                        <li>Raport kelas 1 dan 2 dari sekolah sebelumnya untuk mendaftar di kelas 3</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
