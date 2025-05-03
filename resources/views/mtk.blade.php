<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MTK PKU - CCTV & IT Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body { font-family: 'Segoe UI', sans-serif; }

    /* Hero section */
    .hero { 
      background: url('/images/cctv-bg.jpg') no-repeat center center/cover; 
      padding: 100px 0; 
      color: white; 
      text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
    }

    .services i { font-size: 48px; color: #007bff; }

    .services {
      padding: 60px 0;
      background-color: #f8f9fa;
      text-align: center;
    }

    .services h2 {
      margin-bottom: 40px;
      font-weight: bold;
    }

    .services h5 {
      font-size: 20px;
      font-weight: 600;
    }

    footer { 
      background-color: #343a40; 
      color: white; 
      padding: 20px 0;
    }

    .footer-links a { 
      color: white; 
      text-decoration: none; 
      margin-right: 15px;
    }

    .footer-links a:hover { 
      text-decoration: underline; 
    }

    .map-responsive {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    @media (max-width: 576px) {
      .services h2 {
        font-size: 28px;
      }

      .services i {
        font-size: 36px;
      }

      .services h5 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MTK PKU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto text-uppercase">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome to MTK PKU</h1>
    <p class="lead">Mobile, CCTV, Networking & IT Solutions</p>
    <a href="#contact" class="btn btn-primary mt-3">Get in Touch</a>
  </div>
</section>

<!-- Our Services Section -->
<section id="services" class="py-5">
  <div class="container text-center">
    <h2 class="mb-4">Our Services</h2>
    <div class="row">
      <div class="col-md-3 mb-4">
        <i class="bi bi-phone"></i>
        <h5>Mobile Repair</h5>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-pc-display"></i>
        <h5>IT Solutions</h5>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-camera-video"></i>
        <h5>CCTV Installation</h5>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-router"></i>
        <h5>Networking</h5>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bg-light py-5">
  <div class="container">
    <h2>About MTK PKU</h2>
    <p>We specialize in mobile services, CCTV installation, network setup, and IT support. Using quality brands like HIKVISION, we ensure your safety and system efficiency. Our services are fast, reliable, and affordable.</p>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
  <div class="container">
    <h2>Contact Us</h2>
    <p><strong>Phone:</strong> 09-250231507</p>
    <p><strong>Email:</strong> kyawminsoe.pku@gmail.com</p>
    <p><strong>Address:</strong> အမှတ် (၁၁) ရပ်ကွက်၊ (၇) လမ်းနှင့် (၁၀) လမ်းကြား၊ ပြင်လယ်မဉ္ဇူ၊ ပခုက္ကူ။</p>
  </div>
</section>

<!-- Map Section -->
<section id="map" class="my-5">
  <div class="container">
    <h2 class="text-center mb-4">MTK Computer Location</h2>
    <div class="map-responsive">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.723109164049!2d95.059407!3d21.3426728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca0a639a65c00f%3A0x271e66eefd3445d6!2sMTK%20Computer!5e0!3m2!1sen!2smm!4v1714720815602!5m2!1sen!2smm"
        width="100%" height="400" style="border:0;" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center mt-5">
  <div class="container">
    <div class="footer-links mb-2">
      <a href="#">Home</a>
      <a href="#services">Services</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>
    <p class="mb-0">© 2025 MTK PKU. All rights reserved.</p>
    <p class="mb-0 mt-2">Developed by <a href="/waiphyo" target="_blank">Wai Phyo</a></p> <!-- Added this line -->
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
