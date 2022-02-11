@extends('layout/base-landing')
@section('content')
    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container d-flex flex-column align-items-center" data-aos="fade-up">
            <img class="logo-yayasan" src="{{ asset('images/pkbm/logo.png') }}" alt="" srcset="">
            <h1 class="display-4">Bintang Cemerlang Indonesia</h1>
            <div class="row justify-content-center text-center">
                <p>Merupakan Yayasan yang bergerak dalam bidang usaha non profit yaitu Pusat Pendidikan, Pemberdaaan dan
                    Pelatihan bagi Masyarakat dengan nama <em>PKBM CEMERLANG</em>. Dan unit usaha profit dengan nama <em>PT
                        BINTANG CEMERLANG JAYA SENTOSA.</em><br>
                    <span class="mobile">Melalui keduanya tercipta keseimbangan memberikan kebermanfaatan bagi banyak
                        umat.
                        Hasil usaha profit
                        dimanfaatkan untuk penyelenggaraan kegiatan non profit.
                </p>
            </div>
            <a href="#pkbm"><span class="fas fa-chevron-down light"></span></a>
        </div>
    </div>
    {{-- endjumbotron --}}
    {{-- section --}}
    <section class="pkbm" id="pkbm">
        <div class="container">
            <div class="row d-flex flex-row-reverse">
                <div class="col-lg-6" data-aos="fade-up">
                    <img src="{{ asset('images/pkbm/kesetaraan/pktb3.jpg') }}" width="700px" height="300px"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 p-2" data-aos="fade-up">
                    <h1>PKBM CEMERLANG</h1>
                    <p>Pusat pemberdayaan masyarakat terakreditas A terbaik di Indonesia.</p>
                    <a href="{{ url('/pkbm') }}" class="btn btn-welcome ms-auto">lebih lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt">
        <div class="container">
            <div class="row d-flex flex-row">
                <div class="col-lg-6" data-aos="fade-up">
                    {{-- KURANG! : foto kegiatan pt --}}
                    <img src="{{ asset('images/pt/outlet.jpg') }}" width="700px" height="300px" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-6 p-2" data-aos="fade-up">
                    <h1>PT Bintang Cemerlang Jaya Sentosa</h1>
                    <p>Pusat pemberdayaan masyarakat terakreditas A terbaik di Indonesia.</p>
                    <a href="{{ url('/bintang') }}" class="btn btn-welcome ms-auto">lebih lanjut</a>
                </div>

            </div>
        </div>
    </section>

    <section class="sambutan">
        <div class="container">
            <div class="row justify-content-center text-center" data-aos="fade-up">
                <h1>Sambutan</h1>
            </div>
            <div class="img-box" data-aos="fade-up">
                <img src="{{ asset('images/pkbm/tim/bu_anna.jpg') }}" class="d-block w-200" alt="...">
            </div>
            <div class="row">
                <blockquote class="blockquote text-center" data-aos="fade-up">
                    <p class="fst-italic">“Hidup indah bermakna ketika mampu
                        berbuat yang terbaik dan bermanfaat
                        untuk diri, keluarga, dan masyarakat.
                        Keseimbangan dan bekal hidup
                        di dunia dan akhirat tergantung pada niat.”</p>
                    <footer class="blockquote-footer">Anna Cemerlang (CEO & Founder)</footer>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="culture">
        <div class="container">
            <div class="row justify-content-center text-center" data-aos="fade-up">
                <h1>Culture</h1>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Berkarakter dan menjunjung
                            tinggi nilai
                            agama</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Optimis menata masa depan</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Melakukan yang terbaik dan
                            bermanfaat
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Komitmen melaksanakan amanah
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Berkinerja tinggi</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Bersyukur</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Sejahtera</li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center mt-3" data-aos="fade-up">
                <blockquote class="blockquote text-center">
                    <p class="fst-italic">“Apapun yang dibayangkan, diinginkan dengan sungguh-sungguh,
                        dipercaya dengan sepenuh hati, dan bertindak penuh antusias, tidak mungkin tidak terwujud.”</p>
                </blockquote>
            </div>
        </div>
    </section>
    <section class="mitra">
        <div class="container-fluid">
            <div class="row justify-content-center text-center" data-aos="fade-up">
                <h1>Mitra Organisasi</h1>
            </div>
            <div class="row justify-content-center mt-3" data-aos="fade-up">
                <img src="{{ asset('images/mitra.png') }}">
            </div>
        </div>
    </section>
    <section class="mitra">
        <div class="container-fluid">
            <div class="row justify-content-center text-center" data-aos="fade-up">
                <h1>Mitra</h1>
            </div>
            <div class="row justify-content-center mt-3" data-aos="fade-up">
                <img src="{{ asset('images/mitra.png') }}">
            </div>
        </div>
    </section>
    {{-- endsection --}}
@stop
