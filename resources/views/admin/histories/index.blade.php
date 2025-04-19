@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Histories</h4>
    <a href="{{ route('histories.create') }}" class="btn btn-primary">Add New</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th width="150">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($histories as $history)
        <tr>
            <td>{{ $history->title }}</td>
            <td>{{ Str::limit(strip_tags($history->content), 100) }}</td>
            <td>{{ $history->created_at->format('Y-m-d') }}</td>
            <td>
                <a href="{{ route('histories.edit', $history) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('histories.destroy', $history) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Del</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $histories->links() }}
@endsection