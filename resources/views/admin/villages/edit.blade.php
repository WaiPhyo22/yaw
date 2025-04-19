@extends('layouts.admin')

@section('content')
<h4>Edit Village</h4>
<form action="{{ route('villages.update', $village) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Town</label>
        <select name="town_id" class="form-select" required>
            @foreach($towns as $town)
            <option value="{{ $town->id }}" {{ $village->town_id == $town->id ? 'selected' : '' }}>
                {{ $town->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Village Name</label>
        <input type="text" name="name" class="form-control" value="{{ $village->name }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $village->description }}</textarea>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection