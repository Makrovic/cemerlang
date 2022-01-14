@extends('layout.base-admin')
@section('customcss')

@stop
@section('content')
@include('layout.nav-admin')
@if (session('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
{{-- {{auth()->admin()->name}} --}}
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Produk</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalProduk }}</h6>
                                <span class="text-muted small pt-2 ps-1">produk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Produk Terjual</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalSoldProduk }}</h6>
                                <span class="text-muted small pt-2 ps-1">produk</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Penjualan</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalOrder }}</h6>
                                <span class="text-muted small pt-2 ps-1">pesanan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="card-body">
                        <h5 class="card-title">Pesanan Belum Dikonfirmasi</h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Transaksi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Buyer</th>
                                    <th scope="col">Jumlah Produk</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Ongkir</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newOrders as $order)
                                <tr>
                                    <th scope="row"><a href="#">{{ $order->kode_transaksi }}</a></th>
                                    <td>{{ \Carbon\Carbon::parse($order->tgl_transaksi)->translatedFormat('d-m-Y') }}
                                    </td>
                                    <td>{{ $order->buyer }}</td>
                                    <td>{{ $order->total_produk }}</td>
                                    <td>Rp. {{ number_format($order->subtotal) }},-</td>
                                    <td>Rp. {{ number_format($order->ongkir) }},-</td>
                                    <td>Rp. {{ number_format($order->total) }},-</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="card-body">
                        <h5 class="card-title">Produk Terlaris</h5>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Preview</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Sold</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topSellers as $topSeller)
                                <tr>
                                    <th scope="row"><a
                                            href="{{ asset('images/pt/'.$topSeller->kategori.'/'.$topSeller->foto.'.jpg') }}"
                                            data-lightbox="{{$topSeller->foto}}"><img
                                                src="{{ asset('images/pt/'.$topSeller->kategori.'/'.$topSeller->foto.'.jpg') }}"
                                                class="img-fluid rounded" alt="..." style="max-width: 60px">
                                        </a></th>
                                    <td>{{ $topSeller->nama }}</td>
                                    <td>{{ $topSeller->harga }}</td>
                                    <td class="fw-bold">{{ $topSeller->total }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
@stop