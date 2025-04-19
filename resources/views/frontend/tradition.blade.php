@extends('layouts.frontend')

@section('content')
<h2 class="mb-4 text-center">ယောဒေသ၏ ဓလေ့ထုံးတမ်းများ</h2>

<div class="row">
    @foreach($traditions as $tradition)
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $tradition->title }}</h5>
                <p class="card-text">{{ Str::limit($tradition->content, 200) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $traditions->links() }}
</div>
@endsection