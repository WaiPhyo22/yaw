@extends('layouts.frontend')

@section('content')
<div class="container">
    <h2 class="mb-4">ယောဒေသ သမိုင်းကြောင်းများ</h2>

    @foreach ($histories as $history)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $history->title }}</h5>
                <p class="card-text">{{ Str::limit(strip_tags($history->content), 150, '...') }}</p>
                <a href="{{ route('histories.detail', $history->id) }}" class="btn btn-sm btn-outline-primary">အပြည့်ဖတ်ရန်</a>
            </div>
        </div>
    @endforeach

</div>
@endsection