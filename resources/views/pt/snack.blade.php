@extends('layout.base')
@section('customcss')
    <link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
    {{-- banner --}}
    <div id="banner" class="banner2" style="background-image: url('../images/pt/banner3.jpg')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Bintang Cemerlang Snack</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container-fluid">
            <h1 class="title text-center" data-aos="fade-up">Produk Kami</h1>
            <div class="row g-3 my-2 flex-row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pt/snack/petos.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="h2">Keripik Kedelai Kucai</h3>
                    <p>KERIPIK KEDELAI KUCAI diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Kedelai organik
                        lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.</p>
                    <p>KERIPIK KEDELAI KUCAI, camilan sehat, berkualitas & kaya manfaat.
                        Antioksidan, Isoflavone & Organosulfur yang terkandung dalam KERIPIK KEDELAI KUCAI bermanfaat
                        meningkatkan kesehatan, mengurangi resiko penyakit jantung, mencegah kanker, mencegah osteoporosis,
                        mengatasi gejala menopause, meredakan stres , menurunkan kolesterol, menurunkan tekanan darah &
                        menjaga berat badan seimbang.</p>
                    <p>Komposisi : Kedelai Organik Lokal Premium, Kucai, Bawang Putih, Garam, Minyak Nabati, Tepung Singkong
                        (Mokaf), Kunyit.</p>
                </div>
            </div>
            <div class="row g-3 my-2 flex-row-reverse text-end justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pt/snack/jamur.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="h2">Keripik Jamur Benik</h3>
                    <p>JAMUR BENIK diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Jamur Benik Organik lokal
                        premium hasil kekayaan alam Pegunungan Dieng Wonosobo.</p>
                    <p>JAMUR BENIK, camilan sehat, berkualitas & kaya manfaat. Antioksidan & Vitamin B yang terkandung dalam
                        JAMUR BENIK bermanfaat meningkatkan energi, mengurangi resiko penyakit jantung, mencegah kanker,
                        mencegah osteoporosis, mengatasi gejala menopause, meredakan stress, menurunkan kolesterol,
                        menurunkan tekanan darah & menjaga berat badan seimbang.</p>
                    <p>Komposisi : Jamur Benik Organik Lokal Premium, Tepung Singkong (mokaf), Bawang Putih Organik, Garam.
                    </p>
                </div>
            </div>
            <div class="row g-3 my-2 flex-row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pt/snack/kedele.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="h2">Kedelai Goreng Empuk</h3>
                    <p>KEDELAI GEPUK diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Kedelai organik lokal
                        premium hasil kekayaan alam Pegunungan Dieng Wonosobo.</p>
                    <p>KEDELAI GEPUK, camilan sehat, berkualitas & kaya manfaat. Antioksidan, Isoflavone & Organosulfur yang
                        terkandung dalam KEDELAI GEPUK bermanfaat meningkatkan kesehatan, mengurangi resiko penyakit
                        jantung, mencegah kanker, mencegah osteoporosis, mengatasi gejala menopause, meredakan stres ,
                        menurunkan kolesterol, menurunkan tekanan darah & menjaga berat badan seimbang.</p>
                    <p>Komposisi : Kedelai Organik Lokal Premium, Bawang Putih, Garam, Minyak Nabati.</p>
                </div>
            </div>
            <div class="row g-3 my-2 flex-row-reverse text-end justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pt/snack/piscok.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="h2">Keripik Pisang Cokelat</h3>
                    <p>KERIPIK PISANG COKELAT diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Pisang Organik
                        lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.</p>
                    <p>KERIPIK PISANG COKELAT, camilan sehat, berkualitas & kaya manfaat. sumber karbohidrat, Vitamin A dan
                        Kalsium yang terkandung dalam PISANG COKELAT bermanfaat meningkatkan kekebalan tubuh, memperlancar
                        metabolisme, mengatasi anemis, menurunkan berat badan & menyehatkan tulang paduan cokelat bermanfaat
                        mencegah penyakit jantung, meredakan stres, menurunkan kolesterol & tekanan darah.</p>
                    <p>Komposisi : Pisang Organik Lokal Premium, Coklat Premium, Gula.</p>
                </div>
            </div>
            <div class="row g-3 my-2 flex-row justify-content-center" data-aos="fade-up">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="{{ asset('images/pt/snack/opak.jpg') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="h2">Opak Gula Aren</h3>
                    <p>OPAK PEDAS GULA AREN diolah sepenuh hati perasaan perempuan, diproduksi dari bahan Pisang Organik
                        lokal premium hasil kekayaan alam Pegunungan Dieng Wonosobo.</p>
                    <p>OPAK PEDAS GULA AREN, camilan sehat, berkualitas & kaya manfaat. Antioksidan & Karbohidrat yang
                        terkandung dalam OPAK PEDAS GULA AREN bermanfaat meningkatkan energi, mengurangi reumatik,
                        mengurangi resiko penyakit jantung, mencegah kanker, mencegah osteoporosis, mengatasi gejala
                        menopause, meredakan stress, menurunkan kolesterol, menurunkan tekanan darah, meningkatkan fungsi
                        otak & saraf.</p>
                    <p>Komposisi : Singkong Organik Lokal Premium, Cabai, Gula Aren, Garam.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec parallax d-flex justify-content-center align-items-center" style="min-height: 200px">
        <a href="{{ route('bintang.shop') }}" class="btn-belanja">Belanja Sekarang</a>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
