@extends('layout.base-admin')
@section('customcss')

@stop
    @section('content')
    @include('layout.nav-admin')
    @if(session('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- {{auth()->admin()->name}} --}}
    @stop
        @section('customjs')

        @stop
