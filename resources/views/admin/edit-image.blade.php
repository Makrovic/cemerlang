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
                <h5 class="card-title">Edit Gambar</h5>
                <form action="{{ route('super.editimage')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Width & Height</label>
                        <div class="col-sm-5">
                            <input class="form-control @error('width') is-invalid @enderror" type="text" name="width"
                                value="">
                            @error('width')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control @error('height') is-invalid @enderror" type="text" name="height"
                                value="">
                            @error('height')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto"
                                accept="image/*" value="" required>
                            @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i>
                            Simpan</button>
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