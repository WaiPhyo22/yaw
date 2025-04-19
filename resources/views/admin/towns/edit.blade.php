@extends('layouts.admin')

@section('content')
    <h1 class="mb-4">Edit Town</h1>

    <form action="{{ route('towns.update', $town->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Town Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $town->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)">
        </div>

        {{-- Image Preview --}}
        <div class="mb-3">
            <img id="preview" src="{{ isset($town) && $town->image ? asset('storage/' . $town->image) : '' }}" style="max-width: 200px; {{ isset($town) && $town->image ? '' : 'display: none;' }}">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $town->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update Town</button>
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