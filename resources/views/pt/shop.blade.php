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
            <h1 class="title text-center" data-aos="fade-up">Belanja Langsung</h1>
            <div class="row g-5" data-aos="fade-up">
                @foreach ($produks as $produk)
                <div class="col-4 d-flex justify-content-center">
                    <div class="card text-center card-product">
                        <a class="m-2" href="{{ URL::route('bintang.shop.product.desc',$produk->kode_produk) }}">
                            <div class="img-box-zoom">
                                <img src="{{ asset('images/pt/carica/carica1.jpg') }}"
                                    class="img-fluid rounded" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <span class="text-muted">{{$produk->kategori}}</span>
                            <p>{{$produk->nama}}</p>
                            <h4 class="text-success">Rp.{{$produk->harga}},-</h4>
                            <a href="{{ URL::route('bintang.shop.cart.add',$produk->kode_produk) }}" class="btn btn-carica mt-4">Tambah ke keranjang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="sec back-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hover-box text-center" data-aos="zoom-in">
                        <div class="icon-box align-middle my-3"><i class="fas fa-thumbs-up"></i></div>
                        <h5>Rasa Otentik</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="200">
                    <div class="hover-box text-center">
                        <div class="icon-box align-middle my-3"><i class="fas fa-seedling"></i></div>
                        <h5>Tanpa Pengawet</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in" data-aos-delay="400">
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
            <h1 class="title text-center" data-aos="fade-up">Belanja di Official Online Store</h1>
            <div class="row my-4 p-5" data-aos="fade-up">
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
        <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
        @stop
