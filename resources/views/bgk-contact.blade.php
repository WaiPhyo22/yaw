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
      height: 60vh;
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
      .contact-header h1 {
        font-size: 1.5rem;
      }
    }

    .contact-header {
      background-color: #111;
      color: #fdb813;
      padding: 60px 0 30px 0;
      text-align: center;
    }

    .contact-info {
      background: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    iframe {
      width: 100%;
      height: 300px;
      border: 0;
      border-radius: 8px;
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
          <a class="nav-link" href="/bgk/allproducts">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/bgk/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content Section -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 contact-info">
      <h2 class="mb-3 text-dark">Address</h2>
      <p><strong>BGK Sport Wear Collections</strong><br>
        No.123, Anawrahta Street, Mandalay, Myanmar<br>
        Phone: <a href="tel:+959756541756">+959 756 541 756</a><br>
        Email: <a href="mailto:bgk@example.com">bgk@example.com</a></p>

      <h5 class="mt-4 mb-2 text-dark">Our Location</h5>
      <!-- Embed Google Map -->
      <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9000000000005!2d96.10000000000001!3d21.950000000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0000000000000000!2sBGK%20Sport%20Shop!5e0!3m2!1sen!2smm!4v1714980000000!5m2!1sen!2smm" 
      width="600" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-4">
  &copy; 2025 BGK Sport Wear Collections. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

