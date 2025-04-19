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
            font-family: Arial, sans-serif;
        }
        .hero {
            height: 100vh;
            background: linear-gradient(to right, #0f0c29, #302b63, #24243e);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }
        .hero img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .social-links a {
            margin: 0 10px;
            color: white;
            font-size: 24px;
            transition: 0.3s;
        }
        .social-links a:hover {
            color: #f39c12;
        }
        .about {
            padding: 80px 0;
        }
        .btn-custom {
            background-color: #f39c12;
            color: white;
        }
        .about img {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Wai Phyo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div>
            <img src="images/ban.png" alt="Wai Phyo">
            <h1>Wai Phyo</h1>
            <p>Web Developer | Programmer | Tech Enthusiast</p>
            <a href="images/Wai_Phyo_Web_CV.pdf" class="btn btn-custom" target="_blank">Download CV</a>
            <div class="social-links mt-4">
                <a href="https://www.facebook.com/way.phyo.353/" class="fab fa-facebook" target="_blank"></a>
                <a href="https://waiphyo22.github.io/portfolio.io/" class="fab fa-github" target="_blank"></a>
                <a href="#" class="fab fa-instagram" target="_blank"></a>
                <a href="https://www.linkedin.com/in/wai-phyo-10512b280/" class="fab fa-linkedin" target="_blank"></a>
                <a href="https://www.youtube.com/@waiphyoyaw" class="fab fa-youtube" target="_blank"></a>
            </div>
        </div>
    </section>

    <section class="about text-center" id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>Experienced Web Developer adept in all stages of advanced web development.</p>
            <img src="images/agencys.jpg" alt="About Wai Phyo">
            <ul class="mt-4 profile-list list-unstyled">
                <li><strong>Full Name:</strong> Wai Phyo</li>
                <li><strong>Date of Birth:</strong> 12 February 1997</li>
                <li><strong>Phone:</strong> +959262983589</li>
                <li><strong>Email:</strong> waiphyo055192@gmail.com</li>
            </ul>
        </div>
    </section>

    <section class="contact text-center bg-light py-5" id="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <p>Email: waiphyo055192@gmail.com</p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>