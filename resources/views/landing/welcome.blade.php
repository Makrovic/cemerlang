@extends('layout/base-welcome')
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container d-flex flex-column align-items-center">
        <img src="assets/sty.png" alt="" srcset="" width="200px" data-aos="fade-up">
        <h1 class="display-4" data-aos="fade-up">Bintang Cemerlang Indonesia</h1>
        <h3 class="h3" data-aos="fade-up">Yayasan usaha non profit dan usaha profit</h3>
        <a class="mt-auto" href="#welcome-pkbm"><span class="fas fa-chevron-down light"  data-aos="fade-up"></span></a>
    </div>
</div>
<!--endjumbotron-->
<section class="welcome-yayasan" id="welcome-pkbm">
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up">
                <p><em>BINTANG CEMERLANG INDONESIA</em> merupakan Yayasan yang bergerak dalam 
                    bidang usaha non profit yaitu Pusat Pendidikan, Pemberdaaan dan Pelatihan bagi Masyarakat dengan nama <em>PKBM CEMERLANG</em>.
                    Dan unit usaha profit dengan nama <em>PT BINTANG CEMERLANG JAYA SENTOSA.</em></p>
                <p> Melalui keduana tercipta keseimbangan memberikan kebermanfaatan bagi banyak umat. Hasil usaha profit dimanfaatkan 
                    untuk penyelenggaraan kegiatan non profit.</p>
        </div>
    </div>
</section>
<section class="welcome-pkbm" id="welcome-pkbm">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"  data-aos="fade-up">
                <h1>PKBM Cemerlang</h1>
                <p>Pusat pemberdayaan masyarakat terakreditas A terbaik di Indonesia.</p>
                <a href="pkbm" class="btn btn-welcome">lebih lanjut</a>
            </div>
            <div class="col-lg-6" data-aos="fade-up">
                <img src="assets/img/gambar.jpg" width="700px" height="300px" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<section class="welcome-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <img src="assets/img/gambar.jpg" width="700px" height="300px" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6"  data-aos="fade-up">
                <h1>PT Bintang Cemerlang Jaya Sentosa</h1>
                <p>Pusat pemberdayaan masyarakat terakreditas A terbaik di Indonesia.</p>
                <a href="/bintang" class="btn btn-welcome ms-auto">lebih lanjut</a>
            </div>
            
        </div>
    </div>
</section>
<section class="welcome-sambutan">
    <div class="container">
            <div class="row justify-content-center text-center"  data-aos="fade-up">
                <h1>Sambutan</h1>
        </div>
             <div class="img-box row"  data-aos="fade-up">
                <img src="assets/img/gambar.jpg" class="d-block w-200" alt="...">
              </div>
             <div class="row"><blockquote class="blockquote text-center"  data-aos="fade-up">
                <p class="mb-0 fst-italic">“Hidup indah bermakna ketika mampu
                    berbuat yang terbaik dan bermanfaat
                    untuk diri, keluarga, dan masyarakat.
                    Keseimbangan dan bekal hidup
                    di dunia dan akhirat tergantung pada niat.”</p>
                <footer class="blockquote-footer">Anna Cemerlang (CEO & Founder)</footer>
              </blockquote>
            </div>
    </div>
</section>
<section class="welcome-culture">
    <div class="container">
        <div class="row justify-content-center text-center"  data-aos="fade-up">
            <h1>Culture</h1>
        </div>
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-6">
                <li>Berkarakter dan menjunjung tinggi nilai agama</li>
                <li>Optimis menata masa depan</li>
                <li>Melakukan yang terbaik dan bermanfaat</li>
                <li>Komitmen melaksanakan amanah</li>
                <li>Berkinerja tinggi</li>
                <li>Bersyukur</li>
                <li>Sejahtera</li>
            </div>
        </div>
    </div>
</section>
<section class="welcome-mitra">
    <div class="container">
        <div class="row justify-content-center text-center"  data-aos="fade-up">
            <h1>Mitra</h1>
        </div>
        <div class="row justify-content-center mt-3"  data-aos="fade-up">
            <img src="assets/mitra.jpg">
        </div>
    </div>
</section>
@stop