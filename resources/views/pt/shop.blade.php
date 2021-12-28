@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner2" style="background-image: url('../images/pt/banner5.jpg')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Belanja</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec">
        <div class="container">
            <h1 class="title text-center">Belanja Langsung</h1>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    
                    <div class="card text-center card-product">
                        <a class="m-2" href="{{ url('bintang/shop/desc') }}">
                            <div class="img-box-zoom">
                                <img src="{{ asset('images/pt/carica/carica1.jpg') }}"
                                    class="img-fluid rounded" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 3 cup</p>
                            <h4 class="text-success">Rp. 69.420,-</h4>
                            <a href="#" class="btn btn-carica mt-4">Tambah ke keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card text-center card-product">
                        <a class="m-2" href="#">
                            <div class="img-box-zoom">
                                <img src="{{ asset('images/pt/carica/carica1.jpg') }}"
                                    class="img-fluid rounded" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 6 cup</p>
                            <h4 class="text-success">Rp. 69.420,-</h4>
                            <a href="#" class="btn btn-carica mt-4">Tambah ke keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card text-center card-product">
                        <a class="m-2" href="#">
                            <div class="img-box-zoom">
                                <img src="{{ asset('images/pt/carica/carica1.jpg') }}"
                                    class="img-fluid rounded" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 12 cup</p>
                            <h4 class="text-success">Rp. 69.420,-</h4>
                            <a href="#" class="btn btn-carica mt-4">Tambah ke keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec back-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hover-box text-center">
                        <div class="icon-box align-middle my-3"><i class="fas fa-thumbs-up"></i></div>
                        <h5>Rasa Otentik</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hover-box text-center">
                        <div class="icon-box align-middle my-3"><i class="fas fa-seedling"></i></div>
                        <h5>Tanpa Pengawet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hover-box text-center">
                        <div class="icon-box align-middle my-3"><i class="fas fa-headset"></i></div>
                        <h5>Pelayanan Prima</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="container">
            <h1 class="title text-center">Belanja di Official Online Store</h1>
            <div class="row my-4 p-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/pt/marketplace/tokopedia.png') }}"
                            class="img-fluid" alt="marketplace-tokopedia">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/pt/marketplace/shopee.png') }}"
                            class="img-fluid" alt="marketplace-shopee">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/pt/marketplace/blibli.png') }}"
                            class="img-fluid" alt="marketplace-blibli">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/pt/marketplace/tokko.png') }}"
                            class="img-fluid" alt="marketplace-tokko">
                    </a>
                </div>
            </div>
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="{{ asset('js/lightbox.js') }}"></script>
        @stop
