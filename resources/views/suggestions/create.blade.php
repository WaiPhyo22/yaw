@extends('layouts.frontend')

@section('content')
<div class="container">
    <h4 class="mb-4">အကြံပြုချက် ပေးရန်</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('suggest.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">နာမည် <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ဖုန်းနံပါတ် <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email (Optional)</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">အကြံပြုချက် <span class="text-danger">*</span></label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button class="btn btn-dark">ပေးပို့မည်</button>
    </form>
</div>
@endsection