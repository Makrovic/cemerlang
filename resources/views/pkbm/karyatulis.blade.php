@extends('layout.base')
@section('meta_keywords', 'karya tulis,pkbm,pkbm cemerlang,karya tulis pkbm cemerlang wonosobo', 'anna wardiyati')
@section('meta_description', 'karya tulis PKBM CEMERLANG WONOSOBO')
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
                            <h1>Karya Tulis</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <div class="row g-3 my-2 flex-row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pkbm/karya/buku.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h5>Siapa yang wajb memiliki buku ini?</h5>
                    <ul>
                        <li>Anda yang belum berhasil meraih pencapaian</li>
                        <li>Anda yang bertekad <b class="text-danger">memenangkan</b> kompetisi atau meraih kejuaraan
                            di setiap perlombaan</li>
                        <li>Anda yang menginginkan perubahan derajat & status sosial yang lebih tinggi</li>
                        <li>Anda yang berambisi menjadi satu-satunya yang paling unggul dan terdepan dalam prestasi</li>
                        <li>Yayasan / Lembaha Pendidikan, SPNF, SKB, PKBM, LKP, LPK dan Pemilik Usaha (UKM, UMKM, IKM) yang
                            menginginkan <b class="text-danger">omzet miliaran rupiah</b></li>
                    </ul>
                    <h1>IDR 399K</h1>
                    <p>Order 0812-2522-0948<br>
                        No Call. WA Only</p>
                    <p><b>FREE</b> Tas Etnik, Konsultasi & Pendampingan oleh Penulis, dan Ongkir seluruh Indonesia.</p>
                    <p>Dicetak terbatas hanya 100 eksemplar<br>
                        telahterpesan 900 eksemplar<br>
                        <b class="text-danger">jangan sampai kehabisan, hanya sisa 100 eksemplar</b>
                    </p>
                    <p class="text-danger fw-bolder">GARANSI UANG KEMBALI JIKA TARGET KEMENANGAN ANDA TIDAK TERCAPAI</p>
                </div>
            </div>
            <div class="my-5">
                <h4 class="text-center">Inovasi Media Pembelajaran menerbitkan berbagai ragam Video Pembelajaran Akademik
                    dan Keterampilan.</h4>
            </div>
            <div class="row g-3 my-2 flex-row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pkbm/karya/dvd1.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pkbm/karya/dvd2.jpg') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
