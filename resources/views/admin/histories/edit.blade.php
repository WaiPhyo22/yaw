@extends('layouts.admin')

@section('content')
<h4>Edit History</h4>
<form action="{{ route('histories.update', $history) }}" method="POST">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" value="{{ $history->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="6" required>{{ $history->content }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection