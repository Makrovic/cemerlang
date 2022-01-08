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
            <div class="bg-white p-4 rounded shadow-sm">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="hidden" class="form-control" name="nama" value="{{ $request->nama }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" name="alamat" style="min-height: 100px; max-height: 200px"
                        readonly>{{ $request->alamat }}</textarea>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" value="{{ $request->kota }}" readonly>
                    </div>
                    <div class="col">
                        <label class="form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" value="{{ $request->provinsi }}"
                            readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" name="nohp" value="{{ $request->nohp }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Subtotal</label>
                    <input type="text" class="form-control" name="subtotal" value="{{ $request->subtotal }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cost</label>
                    <input type="text" class="form-control" name="cost" value="{{ $request->cost }}" readonly>
                </div>
            </div>
        </div>
    </section>
@stop
@section('customjs')
@stop
