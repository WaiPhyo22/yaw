@extends('layouts.admin.master')
@section('content')
<h4 class="py-3 font-weight-bolder">User Edit</h4>
<form method="post" id="form" class="jumbotron shadow py-4" action="/user/edit-confirm/{{$userId}}" autocomplete="off">
    {{csrf_field()}}
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="mailAddress" class="font-weight-bold">Mail Address</label>
            <input type="text" name="mailAddress" id="mailAddress" value="{{ old('mailAddress') ?? $mailAddress}}" class="form-control" placeholder="Please enter mail address.">
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
            <input type="text" name="userName" id="userName" value="{{ old('userName') ?? $userName}}" class="form-control" placeholder="Please enter name">
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
                @foreach(config('constant.ROLE') as $key => $roleName)
                    <option value="{{$key}}" @if(old('role')) @if(old('role')===$key) selected @endif @elseif($role===$key) selected @endif>
                        {{ $roleName }}
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
    <div class="default-textbox-width text-center mb-3">
        <a href="{{ url(Session::get('prevUrl')) }}" class="btn btn-default mb-2">Back</a>
        <button type="submit" class="btn btn-default mb-2">Confirm</button>
    </div>
</form>
@endsection
@section('pageJs')
<script src="{{ asset('/js/password.js')}}"></script>
<script src="{{ asset('/js/validation/user-edit-form-validation.js')}}"></script>
<script src="{{ asset('/js/jquery.validate.min.js')}}"></script>
@endsection
