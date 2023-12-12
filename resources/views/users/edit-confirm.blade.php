@extends('layouts.admin.master')
@section('content')
<h4 class="py-3 font-weight-bolder">User Edit Confirm</h4>
<form id="form" method="post" class="jumbotron shadow py-4" action="/user/edit-complete/{{$userId}}" autocomplete="off">
    {{csrf_field()}}
    <!-- user edit-confirm -->
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th width="200">Mail Address</th>
                <th width="10">:</th>
                <td>{{ session('editUserInfo.mailAddress') ?? 'ー'}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <th>:</th>
                <td>{{ session('editUserInfo.userName')}}</td>
            </tr>
            <tr>
                <th>Role</th>
                <th>:</th>
                <td>{{config('constant.ROLE.' . session('editUserInfo.role'))}}</td>
            </tr>
        </tbody>
    </table>

    <button type="submit" class="btn btn-default mb-2" name="action" value="btnBack">Back</button>
    <button type="submit" class="btn btn-default mb-2" name="action" value="btnChange" id="submitBtn">Update</button>
</form>
@endsection
