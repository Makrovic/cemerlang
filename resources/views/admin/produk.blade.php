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
@if (session('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
{{-- {{auth()->admin()->name}} --}}
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title">Semua Produk</h5>
                <table class="table table-borderless table-hover datatable">
                    <thead>
                        <tr>
                            <th scope="col" data-sortable="false">Foto</th>
                            <th scope="col">Kode Produk</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Terjual</th>
                            <th scope="col" data-sortable="false"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                        <tr onclick="window.location='#';">
                            <th scope="row"><a
                                    href="{{ asset('images/pt/'.$produk->kategori.'/'.$produk->foto.'.jpg') }}"
                                    data-lightbox="{{$produk->foto}}"><img
                                        src="{{ asset('images/pt/'.$produk->kategori.'/'.$produk->foto.'.jpg') }}"
                                        class="img-fluid rounded" alt="..." style="max-width: 60px">
                                </a></th>
                            <td>{{ $produk->kode_produk }}</td>
                            <td>{{ $produk->nama }}</td>
                            <td>{{ $produk->kategori }}</td>
                            <td>Rp. {{ number_format($produk->harga) }},-</td>
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->total }}</td>
                            <td><a href="#hapus" class="badge bg-danger link-light">hapus</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2 mt-3">
                    <a class="btn btn-primary" href="{{route('super.produk.add')}}"><i class="fas fa-plus"></i>
                        Tambah Produk</a>
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