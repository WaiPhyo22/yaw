@extends('layouts.frontend')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white text-center">
            <h3 class="mb-0">{{ $festival->name }}</h3>
        </div>
        <div class="card-body">

            @if ($festival->image)
                <div class="text-center mb-3">
                    <img src="{{ asset('storage/' . $festival->image) }}" class="img-fluid rounded" style="max-height: 400px;" alt="{{ $festival->name }}">
                </div>
            @endif

            <p><strong>နေ့စွဲ:</strong> {{ \Carbon\Carbon::parse($festival->festival_date)->format('F d, Y') }}</p>

            @if ($festival->town)
                <p><strong>မြို့:</strong> {{ $festival->town->name }}</p>
            @endif

            <div class="mt-3">
                <p>{!! nl2br(e($festival->description)) !!}</p>
            </div>

            <a href="{{ route('festivals') }}" class="btn btn-secondary mt-4">← ပြန်သွားရန်</a>
        </div>
    </div>
</div>
@endsection