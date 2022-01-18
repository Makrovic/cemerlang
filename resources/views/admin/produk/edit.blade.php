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
        <h1>Ubah Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Produk</li>
                <li class="breadcrumb-item active">Ubah</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title">Ubah Produk</h5>
                <div class="row m-3 d-flex justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{ asset('images/pt/produk/'.$produk->foto.'.jpg') }}"
                            data-lightbox="{{$produk->foto}}"><img
                                src="{{ asset('images/pt/produk/'.$produk->foto.'.jpg') }}" class="img-fluid rounded"
                                alt="..."></a>
                    </div>
                </div>
                <form action="{{ route('super.produk.update',$produk->kode_produk)}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('put')
                    <fieldset>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    value="{{$produk->nama}}" required>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" value="{{$produk->harga}}" required>
                                    @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                    name="kategori" value="{{$produk->kategori}}" required>
                                @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                    name="stok" value="{{$produk->stok}}" required>
                                @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="number" class="form-control @error('berat') is-invalid @enderror"
                                        name="berat" value="{{$produk->berat}}" required>
                                    <span class="input-group-text">gr.</span>
                                    @error('berat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                    placeholder="deskripsi" name="deskripsi"
                                    style="min-height: 100px; max-height: 200px"
                                    required>{{$produk->deskripsi}}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto"
                                    accept="image/*" value="">
                                @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-danger" href="{{ route('super.produk.remove',$produk->kode_produk)}}"><i
                                class="fas fa-trash"></i>
                            Hapus Produk</a>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>
                            Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@stop
@section('customjs')
<script src="https://unpkg.com/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
<script></script>
@stop