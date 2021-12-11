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
                            <h1>Testimoni & Success Story</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <h1 class="title text-center" data-aos="fade-up">Testimoni</h1>
                <div class="card border-dark mb-3" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="img-box">
                                    <img src="../assets/testimoni/testi-adin.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12">
                                <p class="m-0"><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                <p class="card-text fst-light">
                                    Akibat salah pergaulan saya terjebak pada lingkungan yang tidak baik, saya DO dari
                                    sekolah formal, dan melanjutkan di Paket C (setara SMA) . Saya mengucapkan terima
                                    kasih
                                    pada PKBM CEMERLANG. Benar benar memiliki rasa tanggung jawab dalam pembinaan
                                    peserta didiknya. Saya ditempatkan kerja di PT Tirta Investama (AQUA).
                                    Saya merekomendasikan kepada teman dan saudara, untuk belajar di PKBM CEMERLANG.
                                    Selain mendapatkan ijazah, saya dan rekan-rekan tidak menganggur lagi.
                                </p>
                                <h5 class="card-title">Adin</h5>
                                <p class="fst-italic text-muted">Lulusan Paket C PKBM CEMERLANG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row d-flex flex-row-reverse justify-content-center">
                            <div class="col-auto">
                                <div class="img-box">
                                    <img src="../assets/testimoni/testi-mardiati.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 text-end">
                                <p class="m-0"><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                <p class="card-text fst-light">
                                    Tidak menyangka mengikuti pembelajaran di PKBM CEMERLANG begitu menyenangkan.
                                    Tutor sangat peduli pada kami, adanya layanan konseling , dharma wisata,
                                    dan di luar jam akademik kesetaraan kami dibimbing keterampilan untuk bekal kerja
                                    atau berwirausaha.PKBM CEMERLANG benar-benar mengerti apa yang kami butuhkan.
                                </p>
                                <h5 class="card-title">Mardiati</h5>
                                <p class="fst-italic text-muted">Lulusan Paket B PKBM CEMERLANG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-dark mb-3" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <div class="img-box">
                                    <img src="../assets/testimoni/testi-afifah.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12">
                                <p class="m-0"><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                <p class="card-text fst-light">
                                    Setelah mengikuti keterampilan di PKBM CEMERLANG saya dibina untuk berwirausaha.
                                    Alhamdulilah usaha sukses, saya membuka 2 toko pusat oleh-oleh
                                    di Jl. Raya Kertek - Wonosobo.
                                </p>
                                <h5 class="card-title">Afifah</h5>
                                <p class="fst-italic text-muted">Lulusan Keterampilan PKBM CEMERLANG</p>
                            </div>
                        </div>
                    </div>
                </div>
            <h1 class="title text-center" data-aos="fade-up">Success Story</h1>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-12">
                    <div class="card border-dark mb-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{asset('images/alumni/ss1.jpg')}}" alt="...">
                                </div>
                                <div class="col">
                                    <p><b>Nama :</b> Urip Hidayat<br>
                                    <b>TTL :</b> Wonosobo 17-6-1989<br>
                                    <b>Alamat :</b> Bomerto rt1 rw1 Wonosobo<br>
                                    <b>Alumni :</b> Paket C<br>
                                    <b>Ket :</b> Bekerja di PT PANASONIC GOBEL
                                        Jl. Raya Margunda No. 147 Depok Jakarta
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card border-dark mb-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{asset('images/alumni/ss2.jpg')}}" alt="...">
                                </div>
                                <div class="col">
                                    <p><b>Nama :</b> Musafakul Afsor<br>
                                    <b>TTL :</b> Wonosobo 3-6-1989<br>
                                    <b>Alamat :</b> Bumiroso rt8 rw4 Watumalang Wonosobo<br>
                                    <b>Alumni :</b> Paket B<br>
                                    <b>Ket :</b> Berwirausaha Produksi Tahu dan Tempe
                                        (kapasitas produksi perhari 1 kwintal kedelai)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card border-dark mb-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{asset('images/alumni/ss3.jpg')}}" alt="...">
                                </div>
                                <div class="col">
                                    <p><b>Nama :</b> Aini Lutfiana<br>
                                <b>TTL :</b> Wonosobo 07-09-1986<br>
                                <b>Alamat :</b> Krasak rt4 rw4 Mojotengah<br>
                                <b>Alumni :</b> Paket C<br>
                                <b>Ket :</b> Melanjutkan Kuliah di UNSIQ dan bekerja
                                        sebagai pendidik PAUD </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
