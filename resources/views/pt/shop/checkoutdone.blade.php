@extends('layout.base')
@section('customcss')
    <link href="{{ asset('css/content-pt.css') }}" rel="stylesheet" type="text/css">
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            #invoice,
            #invoice * {
                visibility: visible;
            }

            #invoice {
                position: absolute;
                left: 0;
                top: 0;
            }
        }

    </style>
@stop
@section('content')
    {{-- banner --}}
    <div id="banner" class="banner" style="background-image: url('{{ asset('images/pt/banner5.jpg') }}')">
        <div class="banner-hero">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="banner-title">
                            <h1>Pesanan Selesai</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endbanner --}}
    <section class="sec back-gray">
        <div class="container">
            <div class="bg-white p-4 rounded shadow-sm" id="invoice">
                <h2 class="m-2 text-center">Rincian Pesanan</h2><br>
                {{ \Carbon\Carbon::parse($order['tgl_transaksi'])->translatedFormat('l d M, Y') }}
                <p class="h4"><b>Invoice : </b>{{ $order['kode_transaksi'] }}</p>
                <hr>
                <p><b>Nama : </b>{{ $order['buyer'] }}<br>
                    <b>No HP : </b>+{{ $order['nohp'] }}<br>
                    <b>Alamat : </b>{{ $order['alamat'] }}<br>
                    <b>Kota : </b>{{ $order['kota'] }}<br>
                    <b>Catatan : </b>"{{ $order['catatan'] }}"
                </p>

                <hr>
                <h4 class="m-2 text-center">Detail Produk</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-12 my-2">
                        @foreach ($carts as $cart)
                            <div class="row m-2 border-top">
                                <div class="col-auto">
                                    {{ $cart['jumlah'] }}
                                </div>
                                <div class="col d-flex flex-column justify-content-center">
                                    <span><b>{{ $cart['nama'] }}</b><br>
                                        Rp. {{ number_format($cart['subtotal']) }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="row border-bottom m-2">
                            <div class="col">Total Barang</div>
                            <div class="col">{{ $order['total_produk'] }}</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Total Berat</div>
                            <div class="col">{{ $order['berat'] }} gr</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Subtotal</div>
                            <div class="col">Rp. {{ number_format($order['subtotal']) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Ekspedisi</div>
                            <div class="col">{{ $order['ekspedisi'] }}</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Ongkos Kirim</div>
                            <div class="col">Rp. {{ number_format($order['ongkir']) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Total</div>
                            <div class="col fw-bold">Rp. {{ number_format($order['total']) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Etimasi pengiriman</div>
                            <div class="col">{{ $order['estimasi'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-2 d-flex flex-column flex-sm-row justify-content-between">
                <a href="#" class="btn btn-carica m-3"><i class="fas fa-shopping-cart"></i> Kembali Belanja</a>
                <a href="#" id="print" class="btn btn-carica m-3"><i class="fas fa-print"></i>
                    Cetak Invoice</a>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="container">
            <h2 class="title text-center">Petunjuk Pembayaran</h2>
            <ol>
                <li>Transfer ke bank Mandiri <b>( 1360009099992 ) an.PKBM CEMERLANG</b> / BRI <b>( 011201023972508 ) an.
                        PKBM CEMERLANG </b></li>
                <li>Konfirmasi Bukti Transfer melalui SMS Whatsapp ke nomor berikut : <a
                        href="{{ url('https://wa.me/628122520948') }}" target="_blank"
                        class="text-decoration-none link-dark fw-bolder">+628122520948</a> dan barang akan segera
                    kami proses</li>
                <li>Tunggu pesanan sampai, cek Whatsapp atau SMS dari kami untuk melihat detail, nomor resi, dan status
                    pesanan.</li>
                <li>Apabila Barang sudah sampai segera konfirmasikan ke nomor di atas, <span
                        class="text-danger fw-bold">jika tidak
                        kami tidak akan bertanggung jawab atas kerusakan dan kehilangan barang.</span></li>
                <li class="fw-bold">Apabila terjadi perubahan harga atau ongkos kirim, akan segera kami konfirmasi
                    melalui nomor yang sudah anda inputkan</li>
            </ol>
        </div>
    </section>
@stop
@section('customjs')
    <script type="text/javascript">
        $(document).ready(function() {

            $("#print").click(function() {

                window.print();

            });
        })
    </script>
@stop
