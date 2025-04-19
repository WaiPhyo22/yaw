@extends('layouts.admin') <!-- Use the admin layout -->

@section('content')
    <h1 class="mb-4">Towns List</h1>
    
    <!-- Add Button to create new town -->
    <a href="{{ route('towns.create') }}" class="btn btn-primary mb-3">Add New Town</a>

    <!-- Table for displaying town data -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Town Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($towns as $town)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $town->name }}</td>
                    <td>{{ $town->description }}</td>
                    <td>
                        <!-- Edit and Delete buttons -->
                        <a href="{{ route('towns.edit', $town->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('towns.destroy', $town->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this town?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection