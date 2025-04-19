@extends('layouts.frontend')

@section('content')
<div class="container">
    <h3 class="mb-3">{{ $history->title }}</h3>
    <div>
        {!! nl2br(e($history->content)) !!}
    </div>
    <a href="{{ route('histories') }}" class="btn btn-secondary mt-3">← နောက်သို့</a>
</div>
@endsection