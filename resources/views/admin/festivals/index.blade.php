@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Festivals</h4>
    <a href="{{ route('festivals.create') }}" class="btn btn-primary">Add Festival</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Festival Name</th>
            <th>Date</th>
            <th>Town</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($festivals as $festival)
        <tr>
            <td>{{ $festival->id }}</td>
            <td>{{ $festival->name }}</td>
            <td>{{ $festival->town->name ?? 'N/A' }}</td>
            <td>{{ $festival->date }}</td>
            <td>{{ $festival->description }}</td>
            <td>
                <a href="{{ route('festivals.edit', $festival) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('festivals.destroy', $festival) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $festivals->links() }}
@endsection