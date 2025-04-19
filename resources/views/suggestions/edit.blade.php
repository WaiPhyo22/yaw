@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="mb-4">အကြံပြုချက် ပြင်ဆင်ရန်</h4>

    <form method="POST" action="{{ route('suggestions.update', $suggestion->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">နာမည်</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $suggestion->name) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ဖုန်းနံပါတ်</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $suggestion->phone) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email (optional)</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $suggestion->email) }}">
        </div>
        <div class="mb-3">
            <label class="form-label">အကြံပြုချက်</label>
            <textarea name="message" class="form-control" rows="5" required>{{ old('message', $suggestion->message) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">ပြင်ဆင်မည်</button>
        <a href="{{ route('suggestions.index') }}" class="btn btn-secondary">နောက်သို့</a>
    </form>
</div>
@endsection