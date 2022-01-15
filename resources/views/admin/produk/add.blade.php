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
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="card recent-sales">
            <div class="card-body">
                <h5 class="card-title">Tambah Produk</h5>
                <form action="{{ route('super.produk.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10 has-validation">
                                <input type="text" class="form-control" name="nama" required>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <div class="input-group has-validation">
                                    <span class="input-group-text">Rp. </span>
                                    <input type="number" class="form-control" name="harga" required>
                                    @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10 has-validation">
                                <input type="text" class="form-control" name="kategori" required>
                                @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10 has-validation">
                                <input type="number" class="form-control" name="stok" required>
                                @error('stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Berat</label>
                            <div class="col-sm-10">
                                <div class="input-group has-validation">
                                    <input type="number" class="form-control" name="berat" required>
                                    <span class="input-group-text">gr.</span>
                                    @error('berat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10 has-validation">
                                <textarea class="form-control" placeholder="deskripsi" name="deskripsi"
                                    style="min-height: 100px; max-height: 200px" required></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10 has-validation">
                                <input class="form-control" type="file" name="foto" required>
                                @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>
                            Tambah Produk</button>
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