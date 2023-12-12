@extends('layouts.admin.master')
@section('content')
<div class="jumbotron shadow py-4 mt-2 pt-3">
    <form method="get" action="/user/list" autocomplete="off">
        <div class="row mt-3">
            <div class="form-group col-md-4 col-lg-3">
                <label for="email_address" class="mb-1 font-weight-bold">MailAddress</label>
                <input type="text" value="{{ old('email_address')}}" class="form-control" id="email_address" name="email_address" placeholder="Please enter mail address">
            </div>
            <div class="form-group col-md-4 col-lg-3">
                <label for="user_name" class="mb-1 font-weight-bold">Name</label>
                <input type="text" value="{{ old('user_name')}}" class="form-control" id="user_name" name="user_name" placeholder="Please enter name">
            </div>
            <div class="form-group col-md-4 col-lg-3">
                <label for="role" class="mb-1 font-weight-bold">Role</label>
                <select class="form-control" id="role" name="role">
                    <option value="">All</option>
                    @foreach (config('constant.ROLE') as $roleKey => $roleName)
                    <option value="{{$roleKey}}" @selected(old('role')==$roleKey)>{{$roleName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="text-center justify-content-center">
            <a href="/user/list" class="btn btn-default mb-2"><i class="fa-solid fa-eraser pr-2"></i>Clear</a>
            <button type="submit" class="btn btn-default mb-2"><i class="fa fa-search pr-2"></i>Search</button>
        </div>
    </form>
</div>
<div class="row py-3">
    <h4 class="mr-auto ml-3 font-weight-bolder">User List</h4>
    <a href="/user/registration" class="btn btn-default" name="btnsignup">
        <i class="fa fa-user-plus pr-2"></i>Register
    </a>
</div>
@if(Session::get('successMsg'))
<div class="alert alert-success text-center" id="alert_message" role="alert">
    <strong>{{Session::get('successMsg')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(Session::get('errorMsg'))
<div class="alert alert-danger text-center" id="alert_message" role="alert">
    <strong>{{Session::get('errorMsg')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if((isset($userList)) && (!empty($userList)))

<div class="table-responsive">
    <table class="table table-striped table-bordered user-list-table">
        <thead>
            <tr>
                <th>MailAddress</th>
                <th>Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($userList->count() == 0)
            <tr>
                <td class="text-center" colspan="5"><span>Data not found</span></td>
            </tr>
            @elseif($userList->count() > 0)
            @foreach($userList as $list)
            <tr>
                <td style="width: 25%">{{ $list->mail_address}}</td>
                <td style="width: 18%">{{ $list->name }}</td>
                <td style="width: 20%">{{ config('constant.ROLE.'.$list->roles[0]['name']) }}</td>
                <td style="width: 12%">
                    <a href="/user/edit/{{$list->id}}"><i class="fas fa-edit icon mb-3"></i></a>
                    <a href="/user/change-pwd-by-admin/{{ $list->id}}"><i class="fa-solid fa-lock icon mx-3 mb-3"></i></a>
                    <a href=" #delConfirmModal" data-toggle="modal" data-target="#delConfirmModal" data-id="{{$list->id}}" data-email="{{ $list->mail_address }}" data-username="{{ $list->user_name }}"><i class=" fas fa-trash-alt mb-3 icon"></i></a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="row justify-content-center">
    <span class="col-2">{{$userList->appends(request()->query())->links()}}</span>
</div>
@endif

<!-- Delete Confirm Modal -->
<div class="modal fade" id="delConfirmModal">
    <form id="deleteForm" method="post">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Are you sure delete this user？</h4>
                </div>
                <div class="modal-body align-self-center">
                    <span id="email"></span> <br>
                    <span id="username"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-danger btn-small" id="submitBtn">Yes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- End Delete Modal  -->
@endsection
@section('pageJs')
<script src="{{ asset('/js/delete.js')}}"></script>
@endsection