@extends('layouts.admin')

@section('content')
<h4>Add Festival</h4>
<form action="{{ route('festivals.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Festival Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="festival_date" class="form-control">
    </div>

    <div class="mb-3">
        <label>Town (Optional)</label>
        <select name="town_id" class="form-select">
            <option value="">-- Select Town --</option>
            @foreach($towns as $town)
                <option value="{{ $town->id }}">{{ $town->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)">
    </div>
    <div class="mb-3">
        <img id="preview" src="#" style="display: none; max-width: 200px;">
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Save</button>
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