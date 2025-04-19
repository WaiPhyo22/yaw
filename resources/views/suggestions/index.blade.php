@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="mb-4">အကြံပြုချက်များ</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>နာမည်</th>
            <th>ဖုန်း</th>
            <th>Email</th>
            <th>Message</th>
            <th>တင်သည့်အချိန်</th>
            <th>ဖျက်ရန်</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($suggestions as $index => $suggestion)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $suggestion->name }}</td>
            <td>{{ $suggestion->phone }}</td>
            <td>{{ $suggestion->email }}</td>
            <td>{{ Str::limit($suggestion->message, 80) }}</td>
            <td>{{ $suggestion->created_at->format('d-m-Y') }}</td>
            <td>
                <a href="{{ route('suggestions.edit', $suggestion->id) }}" class="btn btn-sm btn-warning">ပြင်မယ်</a>
                <form method="POST" action="{{ route('suggestions.destroy', $suggestion->id) }}" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">ဖျက်မယ်</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $suggestions->links() }}
</div>
@endsection