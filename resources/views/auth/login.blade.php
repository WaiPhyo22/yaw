@extends('layouts.auth.master')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="refresh" content="6000">
@endsection
@section('pageCss')
<link rel="stylesheet" href="css/login.css">
@endsection
@section('content')
<div>
    <div class="container">
        <div class="pb-3 mt-4 col-md-12 text-center">
            <h3 class="font-weight-bolder">Welcome from </h3>
        </div>
        @if($message = Session::get('error'))
        <p class="title-err-message alert alert-danger mb-5 text-center">
            <strong> {{$message}}</strong>
        </p>
        @endif
        <form id="form" action="/login/checkLogin" method="post" name="login" autocomplete="off">
            {{csrf_field()}}
            <div class="form-group mb-4">
                <label>MailAddress</label>
                <div class="input-group mt-2 mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" value="{{old('mailAddress')}}" name="mailAddress" id="mailAddress" class="form-control" placeholder="Please enter mail address">
                </div>
                <div class="mailAddressError"><span class="" id="mailAddressErrIcon"></span></div>
                <!-- server error -->
                @if ($errors->has('mailAddress'))
                <span class="error" id="mailAddressServerError">
                    <span>{{ $errors->first('mailAddress') }}</span>
                </span>
                @endif
            </div>
            <div class="form-group mb-4">
                <label>Password</label>
                <div class="input-group mt-2 mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-asterisk"></i></span>
                    </div>
                    <input type="password" value="{{old('password')}}" name="password" id="password" class="form-control" placeholder="Please enter password">
                    <i id="password-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onClick="showPassword('password')"></i>
                </div>
                <div class="passwordError"><span class="" id="passwordErrIcon"></span></div>
                <!-- server error -->
                @if ($errors->has('password'))
                <span class="error" id="passwordServerError">
                    <span>{{ $errors->first('password') }}</span>
                </span>
                @endif
            </div>
            <div class="text-center mb-3">
                <button type="submit" class="btn btn-default py-2">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('pageJs')
<script src="js/password.js"></script>
<script src="js/validation/login-form-validation.js"></script>
<script src="js/jquery.validate.min.js"></script>
@endsection
