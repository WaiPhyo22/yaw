@extends('layouts.admin')

@section('content')
<h4>Edit Festival</h4>
<form action="{{ route('festivals.update', $festival) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
        <label>Festival Name</label>
        <input type="text" name="name" class="form-control" value="{{ $festival->name }}" required>
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="festival_date" class="form-control" value="{{ $festival->festival_date }}">
    </div>

    <div class="mb-3">
        <label>Town (Optional)</label>
        <select name="town_id" class="form-select">
            <option value="">-- Select Town --</option>
            @foreach($towns as $town)
                <option value="{{ $town->id }}" {{ $festival->town_id == $town->id ? 'selected' : '' }}>
                    {{ $town->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="image" onchange="previewImage(event)">
    </div>

    {{-- Image Preview --}}
    <div class="mb-3">
        <img id="preview" src="{{ isset($festival) && $festival->image ? asset('storage/' . $festival->image) : '' }}" style="max-width: 200px; {{ isset($festival) && $festival->image ? '' : 'display: none;' }}">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $festival->description }}</textarea>
    </div>

    <button class="btn btn-primary">Update</button>
</form>
<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection