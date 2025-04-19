@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-dark text-white text-center">
        <h5>ယောဒေသ ဓလေ့ထုံးတမ်း အသစ်ထည့်ခြင်း</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('traditions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">ခေါင်းစဉ်</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">အကြောင်းအရာ</label>
                <textarea name="description" id="description" rows="6" class="form-control" required>{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-success">သိမ်းမည်</button>
            <a href="{{ route('traditions.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection