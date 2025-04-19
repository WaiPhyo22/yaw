@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Traditions List</h4>
    <a href="{{ route('villages.create') }}" class="btn btn-primary">Add New</a>
</div>
<div class="card-body">
    @if ($traditions->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 10%">#</th>
                        <th style="width: 20%">Title</th>
                        <th style="width: 50%">Description</th>
                        <th style="width: 20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($traditions as $index => $tradition)
                    <tr>
                        <td>{{ $loop->iteration + ($traditions->currentPage() - 1) * $traditions->perPage() }}</td>
                        <td>{{ $tradition->title }}</td>
                        <td>{{ Str::limit($tradition->description, 100) }}</td>
                        <td>
                            <a href="{{ route('traditions.edit', $tradition->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('traditions.destroy', $tradition->id) }}" method="POST" style="display:inline-block">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $traditions->links() }}
        </div>
    @else
        <div class="alert alert-info">No traditions found. Click "Add New" to create one.</div>
    @endif
</div>
@endsection