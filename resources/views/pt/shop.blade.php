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
        @isset($produks)
        <div class="row g-5" data-aos="fade-up">
            @foreach ($produks as $produk)
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <div class="card text-center card-product">
                    <a class="m-2" href="{{ URL::route('bintang.shop.product.desc', $produk->kode_produk) }}">
                        <div class="img-box-zoom">
                            <img src="{{ asset('images/pt/produk/'.$produk->foto.'.jpg') }}" class="img-fluid rounded"
                                alt="...">
                        </div>
                    </a>
                    <div class="card-body">
                        <span class="text-muted">{{ $produk->kategori }}</span>
                        <p>{{ $produk->nama }}</p>
                        <h4 class="text-success">Rp. {{ number_format($produk->harga)}},-</h4>
                        <form action="{{route('bintang.shop.cart.add')}}" method="get">
                            <input type="hidden" name="kodeproduk" value="{{$produk->kode_produk}}">
                            <input type="hidden" name="jumlah" class="form-control text-center" value="1"
                                style="max-width: 60px">
                            <button type="submit" class="btn btn-carica mt-4">Tambah ke keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endisset
        @empty($produks)
        <div class="p-5 m-2 text-center">
            <h1><i class="fa fa-shopping-cart text-primaryc" aria-hidden="true"></i></h1>
            <h3 class="">Belum ada barang</h3>
        </div>
        @endempty
    </div>
</section>
<section class="sec back-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="hover-box text-center" data-aos="zoom-in">
                    <div class="icon-box align-middle my-3"><i class="fas fa-thumbs-up"></i></div>
                    <h5>Rasa Otentik</h5>
                    <p>Bahan baku utama Produk Cemerlang disuplai langsung oleh petani terbaik di Kabupaten Wonosobo
                        melalui proses sortir.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="hover-box text-center">
                    <div class="icon-box align-middle my-3"><i class="fas fa-seedling"></i></div>
                    <h5>Tanpa Pengawet</h5>
                    <p>Produk Cemerlang menggunakan 0% pengawet maupun bahan tambahan pangan lainnya untuk menjaga
                        kualitas rasa dan produk.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="hover-box text-center">
                    <div class="icon-box align-middle my-3"><i class="fas fa-headset"></i></div>
                    <h5>Pelayanan Prima</h5>
                    <p>Produk Cemerlang yang dipesan selalu dicek kelayakannya untuk mengedepankan kepuasan pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec">
    <div class="container">
        <h1 class="title text-center" data-aos="fade-up">Belanja di Official Online Store</h1>
        <div class="row my-4 g-4 p-5" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/pt/marketplace/tokopedia.png') }}" class="img-fluid"
                        alt="marketplace-tokopedia">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/pt/marketplace/shopee.png') }}" class="img-fluid"
                        alt="marketplace-shopee">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/pt/marketplace/blibli.png') }}" class="img-fluid"
                        alt="marketplace-blibli">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/pt/marketplace/tokko.png') }}" class="img-fluid" alt="marketplace-tokko">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="sec back-gray">
    <div class="container">
        <div class="row g-2" data-aos="zoom-in">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row flex-row align-items-center">
                    <div class="col p-3">
                        <img src="{{ asset('images/pt/sertifikasi/bpom.png') }}" class="img-fluid" alt="sertif-bpom">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>Produk CARICA CEMERLANG
                            memenuhi standar
                            Bpom : BPOM RI MD
                            217711001553.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row flex-row align-items-center">
                    <div class="col p-3">
                        <img src="{{ asset('images/pt/sertifikasi/mui.png') }}" class="img-fluid" alt="sertif-mui">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>Produk CARICA CEMERLANG
                            dalam kemasan sudah
                            memiliki sertifikasi
                            halal dan aman.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row flex-row align-items-center">
                    <div class="col p-3">
                        <img src="{{ asset('images/pt/sertifikasi/gmp.png') }}" class="img-fluid" alt="sertif-gmp">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>Produk CARICA CEMERLANG
                            memenuhi standar
                            GMP :
                            0024/LSIPB/GMP/2018.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row flex-row align-items-center">
                    <div class="col p-3">
                        <img src="{{ asset('images/pt/sertifikasi/pls.png') }}" class="img-fluid" alt="sertif-pls">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>Produk CARICA CEMERLANG
                            dalam kemasan sudah
                            tersrtifikasi makanan
                            pilihan lebih sehat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop