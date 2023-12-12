@extends('layouts.admin.master')
@section('pageCss')
<link href="{{ asset('/css/change-pwd.css') }}" rel="stylesheet">
@endsection
@section('content')
<h4 class="py-3 font-weight-bolder">{{ config("constant.FORM_TITLE.CHANGE_PASSWORD") }}</h4>
<form id="form" class="jumbotron shadow py-4" action="/admin/user/change-pwd-by-admin-complete/{{$userId}}" method="post">
    {{csrf_field()}}
    <div class="mb-2 ml-3">
        <span class="font-weight-bold">{{$email}}</span>
    </div>
    <div class="mb-5 ml-3">
        <span class="font-weight-bold">{{$name}}</span>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="newPwd" class="font-weight-bold">Password</label>
            <input type="password" class="form-control" id="newPwd" name="newPwd" value="" placeholder="Please enter password">
            <i id="newPwd-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onclick="showPassword('newPwd')"></i>
        </div>
        <div class="showError">
            <div class="newPwdError">
                <span id="newPwdErrIcon"></span>
            </div>
             <!-- server error  -->
            @if ($errors->has('newPwd'))
            <div class="error mt-4" id="newPwdServerError">
                <span>{{ $errors->first('newPwd') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="confirmNewPwd" class="font-weight-bold">Confirm Password</label>
            <input type="password" class="form-control" id="confirmNewPwd" name="confirmNewPwd" value="" placeholder="Please enter confirm password">
            <i id="confirmNewPwd-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onclick="showPassword('confirmNewPwd')"></i>
        </div>
        <div class="showError">
            <div class="confirmNewPwdError">
                <span class="" id="confirmNewPwdErrIcon"></span>
            </div>
            <!-- server error -->
            @if ($errors->has('confirmNewPwd'))
            <div class="error mt-4" id="confirmNewPwdServerError">
                <span>{{ $errors->first('confirmNewPwd') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="text-center default-textbox-width mb-3">
        <a href="{{ url(Session::get('prevUrl')) }}" class="btn btn-default mb-2" name="btnBack">Back</a>
        <button type="button" class="btn btn-default mb-2" name="btnConfirm" id="btnByAdminConfirm">Changed</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you change password？
                    <div class ="text-center mt-3" >
                        <button type="button" class="btn btn-danger mr-3" data-dismiss="modal" id="btnClose">No</button>
                        <button type="submit" class="btn btn-default btn-small" id="btnSubmit">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('pageJs')
<script src="{{ asset('/js/password.js') }}"></script>
<script src="{{ asset('/js/validation/change-pwd-by-admin-form-validation.js')}}"></script>
<script src="{{ asset('/js/jquery.validate.min.js')}}"></script>
<script>
  var mailAddress = "{{ $email }}";
</script>
@endsection
