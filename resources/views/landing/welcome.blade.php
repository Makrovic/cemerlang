@extends('layout/base-landing')
@section('content')
    {{-- jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container d-flex flex-column align-items-center" data-aos="fade-up">
            <img class="logo-yayasan" src="{{ asset('images/pkbm/logo.png') }}" alt="" srcset="">
            <h1 class="display-4">PKBM CEMERLANG WONOSOBO</h1>
            <div class="row justify-content-center text-center">
                <p>PKBM CEMERLANG WONOSOBO merupakan Pusat Pendidikan, Pelatihan Keterampilan, Pemberdayaan, dan
                    Kewirausahaan Masyarakat terbaik di Indonesia.
                    Terbukti dengan prestasinya sebagai JUARA 1 PKBM Tingkat Nasional, meraih 57 penghargaan lainnya, serta
                    TERKREDITASI A.
                    <br>12 Tahun Berdiri (berdiri pada 1 Januari 2010), PKBM CEMERLANG WONOSOBO
                    berhasil mencetak 13 ribu binaan.<br>
                    PKBM CEMERLANG WONOSOBO juga mendirikan unit usaha berbasis kearifan dan
                    potensi lokal yaitu PT BINTANG CEMERLANG INDONESIA.<br><br>
                    <span class="mobile">PKBM CEMERLANG WONOSOBO beralamat di Jl. Dieng KM. 04 (Jl. Pramuka)
                        Sibunderan RT 005 RW 004, Krasak, Kecamatan Mojotengah Kabupaten Wonosobo, Provinsi Jawa Tengah,
                        Kode Pos 56351.<br></span>
                <h5 style="color: var(--accent)">TIDAK MEMBUKA CABANG DI MANAPUN SELURUH INDONESIA.</h5>
                </p>
            </div>
            <a href="#pkbm"><span class="fas fa-chevron-down light"></span></a>
        </div>
    </div>
    {{-- endjumbotron --}}
    {{-- section --}}
    <section class="sec" id="pkbm">
        <div class="container">
            <div class="row d-flex flex-row-reverse">
                <div class="col-lg-6" data-aos="fade-up">
                    <img src="{{ asset('images/pkbm/kesetaraan/pktb3.jpg') }}" width="700px" height="300px"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 p-2" data-aos="fade-up">
                    <h1 class="title mb-5">PKBM CEMERLANG</h1>
                    <p>Pusat Pendidikan, Pelatihan Keterampilan, Pemberdayaan, dan Kewirausahaan Masyarakat
                        TERAKREDITASI A terbaik di Indonesia.</p>
                    <a href="{{ url('/pkbm') }}" class="btn btn-welcome ms-auto">lebih lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec" style="background-color: var(--bg-gray);">
        <div class="container">
            <div class="row d-flex flex-row">
                <div class="col-lg-6" data-aos="fade-up">
                    <img src="{{ asset('images/pkbm/ruangtamu.jpg') }}" width="700px" height="300px"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 p-2" data-aos="fade-up">
                    <h1 class="title mb-5">PT BINTANG CEMERLANG INDONESIA</h1>
                    <p>PT BINTANG CEMERLANG INDONESIA bergerak di bidang Industri Minuman Buah merek "CARICA CEMERLANG",
                        Industri Makanan Ringan merek "BINTANG CEMRELANG SNACK", dan CLUSTER CRAFT CEMERLANG.</p>
                    <a href="{{ url('/bintang') }}" class="btn btn-welcome ms-auto">lebih lanjut</a>
                </div>

            </div>
        </div>
    </section>

    <section class="sec">
        <div class="container">
            <h1 class="title2 text-center mb-5">Sambutan</h1>
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

    <section class="sec" style="background-color: var(--primary); color: #fff;">
        <div class="container">
            <h1 class="title3 text-center mb-5">Culture</h1>
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
    <section class="sec">
        <div class="container-fluid">
            <div class="d-flex flex-column align-items-center my-5" data-aos="fade-up">
                <h1 class="text-center my-2">Mitra Organisasi</h1>
                <div class="row justify-content-center mt-3">
                    <img src="{{ asset('images/organisasi-mitra.png') }}">
                </div>
                <a href="{{ url('/organisasimitra') }}" class="btn btn-welcome">lebih lanjut</a>
            </div>
            <div class="my-5" data-aos="fade-up">
                <h1 class="text-center my-2">Mitra Kerjasama</h1>
                <div class="row justify-content-center mt-3">
                    <img src="{{ asset('images/mitra.png') }}">
                </div>
            </div>
        </div>
    </section>
    {{-- endsection --}}
@stop
