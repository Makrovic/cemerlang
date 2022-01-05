@extends('layout.base')
@section('customcss')
    <link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
@section('content')
    {{-- banner --}}
    <div id="banner" class="banner" style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Checkout</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    {{-- @dump($produk) --}}
    <section class="sec back-gray">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-6">
                    <div class="bg-white p-2 rounded shadow-sm">
                        @foreach ($carts as $cart)
                            <div class="row m-2">
                                <div class=" col-auto">
                                    <img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt=""
                                        class="img-fluid rounded-3" style="max-width: 80px">
                                </div>
                                <div class="col-auto d-flex flex-column justify-content-center">
                                    <span>{{ $cart['jumlah'] }}X</span>
                                </div>
                                <div class="col-auto d-flex flex-column justify-content-center">
                                    <input type="hidden" name="kodeproduk{{ $loop->index }}"
                                        value="{{ $cart['kode_produk'] }}">
                                    <span>{{ $cart['nama'] }}<br><b>Rp.
                                            {{ number_format($cart['harga']) }}</b></span>
                                </div>
                                <div class="col d-flex flex-column justify-content-center">
                                    <b>Rp. <span>{{ number_format($cart['subtotal']) }}</span></b>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white p-2 rounded shadow-sm">
                        <h2 class="text-center m-2">Total</h2>
                        <div class="row border-bottom m-2">
                            <div class="col">Total Barang</div>
                            <div class="col">{{ $totalbrg }}</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Subtotal</div>
                            <div class="col">Rp. {{ number_format($total) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">
                                Alamat<br>

                            </div>
                        </div>
                        <div class="m-2 d-flex justify-content-center">
                            <a href="#" class="btn btn-carica mt-4">Checkout ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script>
        function inputChange() {
            document.getElementById("btn_refresh_cart").style.visibility = "visible";
        }
    </script>
@stop
