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
    <section class="sec back-gray">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{asset('images/pt/carica/carica3.jpg')}}" class="img-fluid rounded m-2" alt="...">
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 3 cup</p>
                            <h5>Rp. 69.420,-</h5>
                            <a href="#" class="btn btn-success">Tambah ke keranjang</a>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{asset('images/pt/carica/carica3.jpg')}}" class="img-fluid rounded m-2" alt="...">
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 3 cup</p>
                            <h5>Rp. 69.420,-</h5>
                            <a href="#" class="btn btn-success">Tambah ke keranjang</a>
                        </div>
                      </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{asset('images/pt/carica/carica3.jpg')}}" class="img-fluid rounded m-2" alt="...">
                        <div class="card-body">
                            <span class="text-muted">carica</span>
                            <p>Carica Mini 125gr isi 3 cup</p>
                            <h5>Rp. 69.420,-</h5>
                            <a href="#" class="btn btn-success">Tambah ke keranjang</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="{{ asset('js/lightbox.js') }}"></script>
        @stop
