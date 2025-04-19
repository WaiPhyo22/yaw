<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yaw Region</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

{{-- 🔹 Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Yaw Region</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('histories') }}">History</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('villages') }}">Villages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('festivals') }}">Festivals</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('suggest') }}">Suggest</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- 🔹 Main content area --}}
<main class="container mt-4">
    @yield('content')
</main>

{{-- 🔹 Sticky Footer --}}
<footer class="bg-light py-4 border-top mt-auto">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-3">
                <a href="{{ route('histories') }}" class="btn btn-outline-secondary w-100">သမိုင်းကြောင်း</a>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <a href="{{ route('villages') }}" class="btn btn-outline-secondary w-100">ကျေးရွာများ</a>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <a href="{{ route('festivals') }}" class="btn btn-outline-secondary w-100">ပွဲတော်များ</a>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <a href="{{ route('suggest') }}" class="btn btn-outline-secondary w-100">အကြံပြုရန်</a>
            </div>
        </div>

        <div class="text-center text-muted small mt-3">
            &copy; {{ now()->year }} Yaw Region. All rights reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>