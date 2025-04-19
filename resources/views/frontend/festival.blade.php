@extends('layouts.frontend')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">ပွဲတော်များ ({{ $year }})</h2>

    {{-- Year Filter --}}
    <form method="GET" class="mb-4">
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <label for="year" class="col-form-label">Select Year:</label>
            </div>
            <div class="col-auto">
                <select name="year" id="year" class="form-select" onchange="this.form.submit()">
                    @foreach ($years as $y)
                        <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>{{ $y }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>

    {{-- Calendar View --}}
    <div class="row">
        @php
            $months = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];
        @endphp

        @foreach ($months as $index => $month)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h4>{{ $month }}</h4>
                    </div>
                    <div class="card-body">
                        @php
                            $monthFestivals = $festivals->filter(function($festival) use ($index) {
                                return now()->parse($festival->festival_date)->month == $index + 1;
                            });
                        @endphp

                        @if ($monthFestivals->isNotEmpty())
                            @foreach ($monthFestivals as $festival)
                                <a href="{{ route('festival.detail', $festival->id) }}" class="btn btn-outline-primary w-100 mb-2">
                                    <strong>{{ $festival->name }}</strong> - 
                                    {{ \Carbon\Carbon::parse($festival->festival_date)->format('d F Y') }}
                                </a>
                            @endforeach
                        @else
                            <p class="text-muted">No festivals this month</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection