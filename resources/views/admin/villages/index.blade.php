@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Villages</h4>
    <a href="{{ route('villages.create') }}" class="btn btn-primary">Add Village</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Town</th>
            <th>Village Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($villages as $village)
        <tr>
            <td>{{ $village->id }}</td>
            <td>{{ $village->town->name }}</td>
            <td>{{ $village->name }}</td>
            <td>{{ $village->description }}</td>
            <td>
                <a href="{{ route('villages.edit', $village) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('villages.destroy', $village) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $villages->links() }}
@endsection