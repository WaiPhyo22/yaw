@extends('layouts.frontend')

@section('content')
<div class="text-center mb-4">
    <h1 class="fw-bold">ယောဒေသအကြောင်း</h1>
    <p class="text-muted">Yaw Region - Culture, History, Villages and Festivals</p>
</div>

{{-- 🔹 Towns Slide --}}
<div id="townCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($towns as $index => $town)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <div class="d-flex justify-content-center align-items-center text-white" style="height: 300px; background: url('{{ asset('storage/' . $town->image) }}') center center / cover no-repeat;">

                {{-- Overlay for dark effect --}}
                <div style="background-color: rgba(0, 0, 0, 0.5); padding: 20px 30px; border-radius: 10px;">
                    <h3 class="mb-2">{{ $town->name }}</h3>
                    <p class="mb-3">{{ Str::limit($town->description, 100) }}</p>
                    <a href="{{ route('villages') }}" class="btn btn-outline-light btn-sm">View Villages</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#townCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#townCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

{{-- 🔹 Yaw Region Summary --}}
<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="p-4 border rounded h-100 shadow-sm">
            <h5 class="fw-bold">ဒေသအကျဉ်းချုပ်</h5>
            <p>Yaw ဒေသသည် မြန်မာနိုင်ငံတွင် တည်ရှိပြီး ယဉ်ကျေးမှု၊ သမိုင်း၊ ဘာသာရေး နှင့် ရိုးရာဓလေ့များ အကြောင်း သိရှိနိုင်သည့် ဒေသတစ်ခုဖြစ်သည်။</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 border rounded h-100 shadow-sm">
            <h5 class="fw-bold">ဂေဓီ၊ မြေအကျယ်အဝန်း</h5>
            <p>Yaw ဒေသတွင် ရာသီဥတု၊ တောင်တန်းထူထပ်မှု၊ မြေအကျယ်အဝန်း စသည်ဖြင့် သဘာဝပတ်ဝန်းကျင်ဆိုင်ရာ အချက်အလက်များပါဝင်သည်။</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="p-4 border rounded h-100 shadow-sm">
            <h5 class="fw-bold">ယဉ်ကျေးမှုနှင့် ဓလေ့ထုံးတမ်း</h5>
            <p>ယောဒေသ၏ ရိုးရာပွဲတော်များ၊ ဓလေ့ထုံးတမ်းများမှာ သမိုင်းအထင်ကရ ဖြစ်စဉ်များနှင့် ဆက်စပ်နေပါသည်။</p>
        </div>
    </div>
</div>

@endsection