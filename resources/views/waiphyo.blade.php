<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wai Phyo - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero {
            height: 100vh;
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 4px solid #f39c12;
        }
        .social-links a {
            margin: 0 10px;
            color: white;
            font-size: 24px;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .social-links a:hover {
            color: #f39c12;
            transform: scale(1.2);
        }
        .about {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .about h2 {
            font-weight: bold;
            margin-bottom: 30px;
        }
        .btn-custom {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
        }
        .btn-custom:hover {
            background-color: #d78e0c;
        }
        .about img {
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            max-height: 400px;
            object-fit: cover;
        }
        .profile-list li {
            font-size: 1.1rem;
            padding: 5px 0;
        }
        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Home</a>
            <a class="navbar-brand fw-bold" href="#about">About</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div>
            <img src="images/ban.png" alt="Wai Phyo">
            <h1 class="display-4">Wai Phyo</h1>
            <p class="lead">Senior Engineer | Tech Enthusiast | Creative Web Developer</p>
            <!-- <a href="images/Wai_Phyo_Web_CV.pdf" class="btn btn-custom" target="_blank">Download CV</a> -->
            <div class="social-links mt-4">
                <a href="https://www.facebook.com/way.phyo.353/" class="fab fa-facebook" target="_blank"></a>
                <a href="https://waiphyo22.github.io/portfolio.io/" class="fab fa-github" target="_blank"></a>
                <a href="#" class="fab fa-instagram" target="_blank"></a>
                <a href="https://www.linkedin.com/in/wai-phyo-10512b280/" class="fab fa-linkedin" target="_blank"></a>
                <a href="https://www.youtube.com/@waiphyoyaw" class="fab fa-youtube" target="_blank"></a>
            </div>
        </div>
    </section>

    <section class="about py-5 bg-white" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 text-center">
            <img src="images/agency.jpg" alt="About Wai Phyo" class="img-fluid rounded shadow-sm" style="max-height: 350px;">
          </div>
          <div class="col-md-6">
            <h2 class="mb-4">About Me</h2>
            <p class="mb-3">I’m <strong>Wai Phyo</strong>, a passionate and dedicated Web Developer with strong skills in Laravel, PHP, MySQL, JavaScript, and Bootstrap. I have experience building responsive and user-friendly web applications. I am always eager to learn new technologies and grow in a team-oriented environment.</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-user me-2 text-primary"></i><strong>Full Name:</strong> Wai Phyo</li>
              <!-- <li class="mb-2"><i class="fas fa-birthday-cake me-2 text-primary"></i><strong>Date of Birth:</strong> 12 February 1997</li> -->
              <!-- <li class="mb-2"><i class="fas fa-phone me-2 text-primary"></i><strong>Phone:</strong> 09262983589</li> -->
              <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i><strong>Email:</strong> waiphyo055192@gmail.com</li>
              <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i><strong>Location:</strong> Yangon, Myanmar</li>
              <li class="mb-2"><i class="fas fa-code me-2 text-primary"></i><strong>Skills:</strong> HTML, CSS, JavaScript, Bootstrap, jQuery, PHP Laravel, Git, MySQL, AWS CodeCommit</li>
              <li class="mb-2"><i class="fas fa-briefcase me-2 text-primary"></i><strong>Current Position:</strong> Senior Engineer</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer>
        <div class="container">
            <p class="mb-0">&copy; 2025 Wai Phyo. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>