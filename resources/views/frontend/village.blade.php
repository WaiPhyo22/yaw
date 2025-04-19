@extends('layouts.frontend')

@section('content')
<div class="container">
    <h3 class="mb-4">မြို့အလိုက် ကျေးရွာများ</h3>

    {{-- 🔍 Search --}}
    <form method="GET" action="{{ route('villages') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="ရွာအမည်ဖြင့် ရှာဖွေရန်..." value="{{ request('search') }}">
            <button class="btn btn-dark" type="submit">Search</button>
        </div>
    </form>

    {{-- 📍 Grouped Villages --}}
    @forelse($villages as $townName => $villageGroup)
        <div class="card mb-4 shadow">
            <div class="card-header bg-dark text-white fw-bold">
                📍 {{ $townName }}
            </div>
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>ကျေးရွာအမည်</th>
                            <th>ဖော်ပြချက်</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($villageGroup as $index => $village)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $village->name }}</td>
                                <td>{{ Str::limit($village->description, 100) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <p class="text-muted text-center">မည်သည့်ရွာမှ မတွေ့ပါ။</p>
    @endforelse
</div>
@endsection