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
        <h1>Ubah Pesanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Order</li>
                <li class="breadcrumb-item active">Ubah</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title"><b>Invoice : </b>{{ $order->kode_transaksi }}</h5>
                <p>{{ \Carbon\Carbon::parse($order->tgl_transaksi)->translatedFormat('l d M, Y') }}</p>
                <p><b>Nama : </b>{{$order->buyer}}<br>
                    <b>No HP : </b>{{$order->nohp}}<br>
                    <b>Kota : </b>{{$order->kota}}<br>
                    <b>Ekspedisi : </b>{{$order->ekspedisi}}<br>
                    <b>Estimasi Pengiriman : </b>{{$order->estimasi}}<br>
                </p>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat"
                            name="alamat" style="min-height: 100px; max-height: 200px"
                            required>{{$order->alamat}}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Catatan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('catatan') is-invalid @enderror" placeholder="catatan"
                            name="catatan" style="min-height: 100px; max-height: 200px"
                            required>{{$order->catatan}}</textarea>
                        @error('catatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="status">
                            <option value="0" {{$order->status == '0' ? 'selected' : ''}}>Belum Dikonfirmasi
                            </option>
                            <option value="1" {{$order->status == '1' ? 'selected' : ''}}>Menunggu Pembayaran</option>
                            <option value="2" {{$order->status == '2' ? 'selected' : ''}}>Sudah Dibayar</option>
                            <option value="3" {{$order->status == '3' ? 'selected' : ''}}>Selesai</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a class="btn btn-danger" href=""><i class="fas fa-trash"></i>
                        Hapus Pesanan</a>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title">Detail Produk</h5>
                <div class="row">
                    <div class="col-lg-6 col-md-12 my-2">
                        @foreach ($carts as $cart)
                        <div class="row m-2 border-top">
                            <div class="col-auto">
                                {{ $cart->jumlah }}
                            </div>
                            <div class="col d-flex flex-column justify-content-center">
                                <span><b>{{ $cart->nama_produk }}</b><br>
                                    Rp. {{ number_format($cart->subtotal) }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-md-12 my-2">
                        <div class="row border-bottom m-2">
                            <div class="col">Total Barang</div>
                            <div class="col">{{ $order->total_produk }}</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Total Berat</div>
                            <div class="col">{{ $order->berat }} gr</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Subtotal</div>
                            <div class="col">Rp. {{ number_format( $order->subtotal) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Ongkos Kirim</div>
                            <div class="col">Rp. {{ number_format( $order->ongkir) }},-</div>
                        </div>
                        <div class="row border-bottom m-2">
                            <div class="col">Total</div>
                            <div class="col fw-bold">Rp. {{ number_format( $order->total) }},-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<script></script>
@stop