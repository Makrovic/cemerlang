@extends('layout.base')
@section('customcss')
<link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
@stop
    @section('content')
    {{-- banner --}}
    <div id="banner" class="banner"
        style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
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
    <section class="sec">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <td colspan="3" class="text-center">Produk</td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>x</td>
                        <td><img src="{{ asset('images/pt/carica/carica1.jpg') }}" alt=""
                            class="img-fluid rounded-3" style="max-width: 80px"></td>
                        <td>Cup Mini 125gr isi 3 cup</td>
                        <td>20000</td>
                        <td><div class="input-group">
                            <button class="btn btn-outline-success" type="button" id="button-addon1">-</button>
                            <input type="text" class="form-control text-center" value="1" style="max-width: 60px">
                            <button class="btn btn-outline-success" type="button" id="button-addon1">+</button>
                        </div></td>
                        <td>20000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-end"><a href="#" class="btn btn-carica mt-4">perbarui keranjang</a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    @stop
        @section('customjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stop
