@extends('layout.base-admin')
@section('customcss')
@stop
@section('content')
<div class="container">
    <p><b>Nama : </b>{{$order->buyer}}<br>
        <b>No HP : </b>+{{$order->nohp}}<br>
        <b>Alamat : </b>{{$order->alamat}}<br>
        <b>Kota : </b>{{$order->kota}}<br>
        <b>Catatan : </b>{{$order->catatan}}<br>
    </p>
</div>
@stop
@section('customjs')
<script>
    $(document).ready(function() {
    window.print();
    })
</script>
@stop