@extends('layouts.admin.master')
@section('pageCss')
<link href="css/change-pwd.css" rel="stylesheet">
@endsection
@section('content')
<h4 class="py-3 font-weight-bolder">Change Password</h4>
<form id="form" class="jumbotron shadow py-4" action="/change-pwd-complete" method="post">
    {{csrf_field()}}
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="currentpwd" class="font-weight-bold">Current Password</label>
            <input type="password" class="form-control" id="currentPwd" name="currentPwd" value="" placeholder="Please enter current password">
            <i id="currentPwd-pass-status" class="fa fa-eye eye-icon" aria-hidden="true" onclick="showPassword('currentPwd')"></i>
        </div>
        <div class="showError">
            <div class="currentPwdError">
                <span class="" id="currentPwdErrIcon"></span>
            </div>
            <!-- server error -->
            @if ($errors->has('currentPwd'))
            <div class="error mt-4" id="currentPwdServerError">
                <span>{{ $errors->first('currentPwd') }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="mb-3 ml-3">
        <div class="form-group default-textbox-width">
            <label for="newPwd" class="font-weight-bold">New Password</label>
            <input type="password" class="form-control" id="newPwd" name="newPwd" value="" placeholder="Please enter new password">
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
    <div class="default-textbox-width text-center mb-3">
        <button type="button" class="btn btn-default" name="btnConfirm" id="btnConfirm">Change</button>
    </div>
    <!-- Confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure password change？
                    <br/>
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
<script src="js/password.js"></script>
<script src="js/validation/change-pwd-form-validation.js"></script>
<script src="js/jquery.validate.min.js"></script>
@endsection
