@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner" style="background-image: url('../images/pt/banner5.jpg')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Kontak</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <h1 class="title text-center">Hubungi Kami</h1>
            <div class="row mt-4">
                <div class="col-4">
                    <h2 class="fw-bolder">PT. BINTANG CEMERLANG JAYA SENTOSA</h2>
                    <p>
                        Jl. Dieng km. 4
                        Sibunderan rt.5 rw.4 Krasak Mojotengah
                        Wonosobo
                        56351
                    </p>
                </div>
                <div class="col-12">
                    
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-sm-12 col-lg-5">
                    <a href="wa.me/628122520948" target="_blank" class="text-decoration-none link-dark">
                        <div class="hover-box">
                            <span class="icon-box align-middle"><i class="fab fa-whatsapp"></i></span>
                            <span>+6281 22522 0948</span>
                        </div>
                    </a>
                    <a href="https://www.facebook.com/pkbmcemerlangwonosobo" target="_blank" class="text-decoration-none link-dark">
                        <div class="hover-box">
                            <div class="icon-box align-middle"><i class="fab fa-facebook"></i></div>
                            <span>facebook.com/pkbmcemerlangwonosobo</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/caricacemerlang" target="_blank" class="text-decoration-none link-dark">
                        <div class="hover-box">
                            <div class="icon-box align-middle"><i class="fab fa-instagram"></i></div>
                            <span>instagram.com/caricacemerlang</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-7">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="nama">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="judul">
                            <label for="subject">Judul</label>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" id="pesan" rows="5" placeholder="Pesan"
                                required></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-carica" type="submit">Kirim</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="sec back-gray">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663.8136771853085!2d109.91020028825046!3d-7.327129729645857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa061535d544f%3A0x3e523ccaeb0b701e!2sPKBM%20CEMERLANG!5e0!3m2!1sen!2sid!4v1640147297903!5m2!1sen!2sid"
                    width="1600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
        @stop
