@extends('layout.base-admin')
@section('customcss')

@stop
@section('content')
@if(session('success'))
    <div class="alert alert-danger alert-dismissible" role="alert" style="z-index: 1">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <img src="{{ asset('images/pkbm/logo-nav.png') }}" width="220px" alt="PKBM CEMERLANG">
    <div class="title mt-5">
        <h2>Log In</h2>
            <form accept-charset="UTF-8" role="form" action="{{ URL::route('super.postlogin') }}" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="uname" name="uname" placeholder="username">
                        <label for="uname">Username</label>
                        @if($errors->has('uname'))
                            <span class="error" style="color: red">
                                {{ $errors->first('uname') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="password">
                        <label for="pwd">Password</label>
                        @if($errors->has('pwd'))
                            <span class="error" style="color: red">
                                {{ $errors->first('pwd') }}
                            </span>
                        @endif
                    </div>
                    <input class="btn btn-success mt-4" type="submit" value="Log In" name="login">
                </fieldset>
            </form>
            <br>
            <br>
            <br>
            <div>&copy;Copyright <strong>Cemerlang</strong>. All rights reserved</div>
    </div>
</div>
@stop
@section('customjs')

@stop
