@extends('layouts.admin.master')
@section('pageCss')
<link href="{{ asset('/css/change-pwd.css') }}" rel="stylesheet">
@endsection
@section('content')
<h4 class="py-3 font-weight-bolder">User Register</h4>
<form method="post" id="form" class="jumbotron shadow py-4" action="/user/registration-confirm" autocomplete="off">
    {{csrf_field()}}
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="mailAddress" class="font-weight-bold">MailAddress</label>
            <input type="text" name="mailAddress" id="mailAddress" value="{{ old('mailAddress') }}" class="form-control" placeholder="Please enter mail address">
        </div>
        <div class="showError">
            <div class="mailAddressError">
                <span id="mailAddressErrIcon"></span>
            </div>
             <!-- server error  -->
            @if ($errors->has('mailAddress'))
            <div class="error mt-4" id="mailAddressServerError">
                <span>{{ $errors->first('mailAddress') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="userName" class="font-weight-bold">Name</label>
            <input type="text" name="userName" id="userName" value="{{ old('userName') }}" class="form-control" placeholder="Please enter name">
        </div>
        <div class="showError">
            <div class="userNameError">
                <span id="userNameErrIcon"></span>
            </div>
             <!-- server error  -->
            @if ($errors->has('userName'))
            <div class="error mt-4" id="userNameServerError">
                <span>{{ $errors->first('userName') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="currentpwd" class="font-weight-bold">Role</label>
            <select class="form-control w-100" id="role" name="role">
                @foreach(config('constant.ROLE') as $key => $role)
                    <option value="{{$key}}" @if(old('role')===$key) selected @endif>
                        {{ $role }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="showError">
            <div class="roleError">
                <span id="roleErrIcon"></span>
            </div>
             <!-- server error  -->
            @if ($errors->has('role'))
            <div class="error mt-4" id="roleServerError">
                <span>{{ $errors->first('role') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="password" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Please enter password">
            <i id="password-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onclick="showPassword('password')"></i>
        </div>
        <div class="showError">
            <div class="passwordError">
                <span id="passwordErrIcon"></span>
            </div>
             <!-- server error  -->
            @if ($errors->has('password'))
            <div class="error mt-4" id="passwordServerError">
                <span>{{ $errors->first('password') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="confirmPwd" class="font-weight-bold">Confirm password</label>
            <input type="password" class="form-control" id="confirmPwd" name="confirmPwd" value="{{ old('confirmPwd') }}" placeholder="Please enter confirm password">
            <i id="confirmPwd-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onclick="showPassword('confirmPwd')"></i>
        </div>
        <div class="showError">
            <div class="confirmPwdError">
                <span class="" id="confirmPwdErrIcon"></span>
            </div>
            <!-- server error -->
            @if ($errors->has('confirmPwd'))
            <div class="error mt-4" id="confirmPwdServerError">
                <span>{{ $errors->first('confirmPwd') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="default-textbox-width text-center mb-3">
        <a href="{{ url(Session::get('prevUrl')) }}" class="btn btn-default mb-2">Back</a>
        <button type="submit" class="btn btn-default mb-2">Confirm</button>
    </div>
</form>
@endsection
@section('pageJs')
<script src="{{ asset('/js/password.js')}}"></script>
<script src="{{ asset('/js/validation/register-form-validation.js')}}"></script>
<script src="{{ asset('/js/jquery.validate.min.js')}}"></script>
@endsection
