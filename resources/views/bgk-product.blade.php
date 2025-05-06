<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BGK Sport Wear Collections - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #111;
    }

    .navbar-brand, .nav-link {
      color: white !important;
      font-weight: bold;
    }

    .navbar .nav-link.active {
      color: #fdb813 !important;
    }

    .hero {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                  url('/images/bgkhome.jpg');
      background-size: cover;
      background-position: center;
      height: 30vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: bold;
      color: #fdb813;
    }

    .product-card {
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .product-card:hover {
      transform: scale(1.02);
    }

    .product-card img {
      height: 240px;
      object-fit: cover;
      width: 100%;
    }

    .btn-yellow {
      background-color: #fdb813;
      color: #222;
      font-weight: bold;
    }

    .btn-yellow:hover {
      background-color: #e6a700;
    }

    footer {
      background-color: #111;
      color: #fdb813;
    }

    @media (max-width: 768px) {
      .hero {
        height: 40vh;
        padding: 1rem;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .hero p.lead {
        font-size: 1rem;
      }
    }

    @media (max-width: 576px) {
      .product-card img {
        height: 180px;
      }

      .card-title {
        font-size: 1rem;
      }

      .btn-yellow {
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand text-warning fw-bold" href="#">BGK ⚽</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/bgk">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/bgk/allproducts">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bgk/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Title Section -->
<div class="container mt-5 pt-4">
  <h2 class="text-center fw-bold text-warning mb-4">Our Products</h2>
  <p class="text-center text-muted mb-5">Explore our latest football jerseys, boots, gloves & more!</p>
</div>

<!-- Product Grid -->
<div class="container mb-5">
  <div class="row">
    @for($i = 1; $i <= 4; $i++)
      <div class="col-md-4 mb-4">
        <div class="card product-card shadow-sm">
          <img src="/images/bgk{{ $i }}.jpg" alt="Product {{ $i }}">
          <div class="card-body">
            <h5 class="card-title">Product {{ $i }}</h5>
            <p class="card-text text-muted">This is good product.</p>
            <p class="fw-bold text-dark mb-2">$ {{ 10 + $i * 5 }}.00</p>
            <a href="#" class="btn btn-yellow">View Detail</a>
          </div>
        </div>
      </div>
    @endfor
  </div>

  <!-- Pagination -->
  <div class="d-flex justify-content-center mt-4">
    {{-- Pagination buttons here if needed --}}
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-4">
  &copy; 2025 BGK Sport Wear Collections. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
