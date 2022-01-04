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
                            <h1>Keranjang</h1>
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
            <div class="row">
                <div class="col-9 bg-white p-2 m-2 rounded shadow-sm">
                    {{-- <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <td colspan="3" class="text-center p-3">Produk</td>
                                <td class="p-3">Harga</td>
                                <td class="p-3">Jumlah</td>
                                <td class="p-3">Subtotal</td>
                            </tr>
                        </thead>
                        <tbody style="border-top: none">
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="text-center h5"><a href=""><span
                                                class="btn btn-outline-danger rounded">X</span></a></td>
                                    <td><img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt=""
                                            class="img-fluid rounded-3" style="max-width: 80px"></td>
                                    <td><b>{{ $cart['nama'] }}</b></td>
                                    <td>Rp. {{ number_format($cart['harga']) }}</td>
                                    <td>
                                        <div class="input-group">
                                            <button class="btn btn-outline-success" type="button"
                                                id="button-addon1">-</button>
                                            <input type="text" class="form-control text-center"
                                                value="{{ $cart['jumlah'] }}" style="max-width: 60px">
                                            <button class="btn btn-outline-success" type="button"
                                                id="button-addon1">+</button>
                                        </div>
                                    </td>
                                    <td>Rp. {{ number_format($cart['subtotal']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot style="border-top: none">
                            <tr>
                                <td>perbarui tabel</td>
                                <td colspan="4"></td>
                                <td>Rp. {{ number_format($total) }},-
                                </td>
                            </tr>
                        </tfoot>
                    </table> --}}
                    @foreach ($carts as $cart)
                        <div class="row">
                            {{-- <div class="col">
                                <a href=""><span class="btn btn-outline-danger rounded">X</span></a>
                            </div> --}}
                            <div class="col-auto">
                                <img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt="" class="img-fluid rounded-3"
                                    style="max-width: 80px">
                            </div>
                            <div class="col d-flex flex-column justify-content-center">
                                <span>{{ $cart['nama'] }}<br><b>Rp. {{ number_format($cart['harga']) }}</b></span>
                            </div>
                            <div class="col d-flex flex-column justify-content-center">
                                <div class="input-group">
                                    <button class="btn btn-outline-success" type="button" id="button-addon1">-</button>
                                    <input type="text" class="form-control text-center" value="{{ $cart['jumlah'] }}"
                                        style="max-width: 60px">
                                    <button class="btn btn-outline-success" type="button" id="button-addon1">+</button>
                                </div>
                            </div>
                            <div class="col d-flex flex-column justify-content-center">
                                <b>Rp. {{ number_format($cart['subtotal']) }}</b>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col bg-white p-2 m-2 rounded shadow-sm">
                    <h2 class="text-center m-2">Total</h2>
                    <table class="table align-middle">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>Rp. {{ number_format($total) }},-
                                </td>
                            </tr>
                            <tr>
                                <td>Pengiriman</td>
                                <td>Hitung
                                </td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>Rp. {{ number_format($total) }},-
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
    <script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop
