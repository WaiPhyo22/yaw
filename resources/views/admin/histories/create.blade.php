@extends('layouts.admin')

@section('content')
<h4>Add History</h4>
<form action="{{ route('histories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="6" required></textarea>
    </div>

    <button class="btn btn-primary">Save</button>
</form>
@endsection