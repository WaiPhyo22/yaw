@extends('layouts.admin')

@section('content')
<h4>Add Village</h4>
<form action="{{ route('villages.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Town</label>
        <select name="town_id" class="form-select" required>
            @foreach($towns as $town)
            <option value="{{ $town->id }}">{{ $town->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Village Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary">Save</button>
</form>
@endsection