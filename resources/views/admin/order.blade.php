@extends('layout.base-admin')
@section('customcss')
<style>
    .table tbody tr {
        cursor: pointer;
    }
</style>
@stop
@section('content')
@include('layout.nav-admin')
{{-- {{auth()->admin()->name}} --}}
<main id="main" class="main">
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="pagetitle">
        <h1>Order</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Order</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title">Semua Transaksi</h5>
                <table class="table table-borderless table-hover datatable">
                    <thead>
                        <tr>
                            <th scope="col">Kode Transaksi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Buyer</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Ongkir</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr onclick="window.location='{{route('super.order.edit', $order->kode_transaksi)}}';">
                            <th scope="row">{{ $order->kode_transaksi }}</th>
                            <td>{{ \Carbon\Carbon::parse($order->tgl_transaksi)->translatedFormat('d-m-Y') }}
                            </td>
                            <td>{{ $order->buyer }}</td>
                            <td>{{ $order->total_produk }}</td>
                            <td>Rp. {{ number_format($order->subtotal) }}</td>
                            <td>Rp. {{ number_format($order->ongkir) }}</td>
                            <td>Rp. {{ number_format($order->total) }}</td>
                            <td>@if ($order->status == '0')
                                <span class="badge bg-danger">belum dibayar</span>
                                @elseif ($order->status == '1')
                                <span class="badge bg-warning">menunggu pembayaran</span>
                                @elseif ($order->status == '2')
                                <span class="badge bg-success">sudah dibayar</span>
                                @else
                                <span class="badge bg-primary">selesai</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<script></script>
@stop