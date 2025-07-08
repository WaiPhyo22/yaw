<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phyo Chit Ko</title>
  <link rel="icon" href="portfolioimage/pck.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/MyPortfolio.css">
</head>
<body style="background: linear-gradient(to right, #03030a, black, rgb(8, 8, 8));">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navb fixed-top bg-dark navbar-dark">
            <a href="#">
            <img class="navbar-brand ms-3" src="portfolioimage/pck.png" width="70" height="70" alt="">
            </a>
            <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#nav-info" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="nav-info">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-info nav_transform" aria-current="page" href="">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-info nav_transform " href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info nav_transform" href="#skills">SKILLS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_transform text-info" href="#contact">CONTACT</a>
                    </li>
                </ul>
        </nav>
    <!--photo and name-->
    <div class="container-fluid">
    <div class="row">
        <!-- Left Column (Text + background on small screen) -->
        <div class="col-12 col-md-7 min-vh-100 bg-img position-relative d-flex flex-column align-items-center justify-content-center about" 
            style="background-color: black;">
            <!-- Photo shown only on small screens -->
            <img src="portfolioimage/hotel loby.jpeg"
                class="d-block d-md-none mx-auto mb-3  border border-3 border-info rounded-circle" style="margin-top: 10%;"
                alt="Profile Photo"
                width="100" height="100">
            
            <!-- Background image on small screen -->
            <div class="d-block d-md-none position-absolute top-0 start-0 w-100 h-100" 
                style="background-image: url('portfolioimage/pcko.webp'); background-size: cover; background-position: center; opacity: 0.2; z-index: 0;"></div>

                <!-- Text Content -->
                <div class="z-1 text-center text-md-start px-4 px-md-5" style="color: #07dfee;">
                    <h1 style="font-size: 50px;">
                    <i><span style="font-family: ballentine;">Hello</span></i>👋<br>
                    <span style="font-size: 45px;">I'<span style="font-size: 48px;">m</span> Phyo Chit KO</span>
                    </h1>

                    <p class="gradient-text" style="font-size: 60px;"><u>Frontend Developer</u></p>

                    <!-- Button for small screen -->
                    <button class="btn btn-outline-light d-block d-md-none mb-3" onclick="toggleInfo()">Show More</button>

                    <!-- Text to toggle -->
                    <p id="infoText" class="text-gray d-none d-md-block" style="font-size: 20px;">
                    <i>
                        I'm a <span class="develop">developer</span> with a passion for creating clean, responsive, and 
                        user-friendly websites using HTML, CSS, JavaScript, and Bootstrap. 
                        Always learning, always building.
                    </i>
                    </p>
                    <div class="d-flex justify-content-center justify-content-md-start social-div" style="--color: #71a9ad;">
                        <a href="https://www.facebook.com/phyo.chit.ko.418075" class="social" target="_blank"><img src="portfolioimage/facebook.png" alt="" width="40" height="40"></a>
                        <a href="https://www.tiktok.com/@phyochitko51" class="social" target="_blank"><img src="portfolioimage/tiktok.png" alt="" width="40" height="40"></a>
                        <a href=""><img src="portfolioimage/instergram.png" class="social" alt="" width="40" height="40"></a>
                        <a href="https://github.com/Phyo-Chit-Ko" class="social"><img src="portfolioimage/github.webp" alt="" width="40" height="40"></a>
                        <a href="mailto:pchitko29@gmail.com" class="social"><img src="portfolioimage/mail.png" alt="Email" width="60" height="60"></a>
                    </div>
                </div>
            </div>

            

            <!-- Right Column (image shown only on md+ screens) -->
            <div class="col-md-5 d-none d-md-flex justify-content-end align-items-start mt-5" style="z-index: 1;">
                <img src="portfolioimage/pcko.webp" width="350" height="530" alt="">
            </div>
    </div>


<!-- Toggle Script -->
<script>
function toggleInfo() {
  const info = document.getElementById("infoText");
  info.classList.toggle("d-none");
}
</script>

    <hr style="height: 5px; background-color: rgb(255, 253, 253); border: none; width: 65%; margin: 5px 35%;">
    <hr style="height: 5px; background-color: rgb(4, 135, 223); border: none; width: 65%; margin: 5px 0%;"><br><br><br><br>
       
    <!-- about -->
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100 it_journay" id="about">
        <div class="container w-75 it_border d-flex flex-column flex-md-row p-5 rounded-5 mb-5 h-md-100" 
        style="background: linear-gradient(to right, #03030a, black, rgb(8, 8, 8)); box-shadow:
            0 0 10px white;">
            <div class="col-md-5 ">
                <!--<img src="portfolioimage/developer.png" width="340" height="450" class="rounded-5 ms-5" alt="">-->
                <div style="position: relative; width: 75%; height: 70%;">
                    <!-- Background Image -->
                    <img src="portfolioimage/developerback.jpg" class="rounded-3 img-fluid d-none d-md-block" style="position: absolute; top: 20%; left: 15%; width: 100%; height: 100%; object-fit: cover; z-index: 1;">

                    <!-- Overlay Image -->
                    <img src="portfolioimage/developeranime.png" class="rounded-circle img-fluid" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 2;">
                </div>

            </div>
            
            <div class="col-md-7 col-11 d-flex justify-content-center align-items-center flex-column develop">
                <h3>
                    My IT Journay
                </h3>
                        
                <p class="col-12 col-md-8 mb-0 mt-3" style="font-family: Allura; font-size: 18px;"> 
                    <i> I started my IT career over a year ago by joining the GIC Career Gateway. 
                        This company provides professional IT training. Currently, I am learning HTML, 
                        CSS, Bootstrap, and JavaScript, and I have become able to develop responsive,
                        user-friendly, and high-performance web applications. Alongside my IT studies, 
                        I am also studying Japanese, with the goal of working as a software developer 
                        in Japan in the future.
                    </i>
                </p>
            </div>
        </div>
    </div>
    <hr style="height: 3px; width: 50%; color: antiquewhite; justify-self: center;"><br>    
    
    
    <!-- skill-->
    <div class="d-flex flex-md-row flex-column">
        <div class="col-12 col-md-6 border-light pe-md-4 mb-4 mb-md-0">
            <div class="d-flex min-vh-100 flex-column ms-5 ">
                <p class="text-center fs-1 text-light">My Projects</p>
                <div class="box-image d-flex justify-content-center">
                    <a href="/japanese/welcome.html" target="_blank"><img src="portfolioimage/Marvelous.png" class="rounded-4 img" alt="Git & GitHub"></a>
                    <a href="/japanese/Navbar-assign/navbar-card-carousel.html" target="_blank"><img src="portfolioimage/navbar_teacher_resized.png" class="rounded-4 img" alt=""></a>
                    
                </div>
                
                <div class="box-image d-flex justify-content-center mt-2">
                    <a href="/japanese/Lotus login form/background-login.html" target="_blank"><img src="portfolioimage/Login_page.png" class="rounded-4 img" alt=""></a>

                    <a href="/japanese/Lotus login form/lotus.html" target="_blank"><img src="portfolioimage/lotus.png" class="rounded-4 img" alt=""></a>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="container rounded-5 mb-md-5 " id="skills">
    
                <div class=" skill_fluid ">
                    <p class="text-center fs-1 text-white"><i>My Skills🖥️</i></p>
                    <div class=" skill">
                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/html.png" alt="HTML">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/css.png" alt="CSS">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/bootstrap.png" alt="Bootstrap">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card 4-->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/docker.png" alt="Docker">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card 5-->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/linux.png" alt="Linux">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card6-->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/aws.png" alt="AWS">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Card 7-->
                            <div class="col-11 col-md-3 d-flex justify-content-center">
                                <div class="card skill_card w-75 w-md-25">
                                    <div class="imgbx">
                                        <img src="portfolioimage/git.png" alt="Git & GitHub">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--skills-->

   

    <!-- Contact me-->
    <div class="blur-bg-container">
        <!-- Blurred Background Image -->
        <div class="blur-bg-image">
        </div>

        <!-- Foreground Content -->
        <div class="container blur-bg-content" id="contact">
            <div class="text-center">
                <h1 class="text-info mb-2" style="font-size: 50px;">Contact Me</h1>
                <p>I'm always open to new ideas and collaborations. 
                Feel free to reach out if you'd like to work together or just say hello!</p>
            </div><br>
            <div class="d-flex flex-column flex-md-row flex-wrap">
                <div class="col-12 col-md-6 mb-4">   
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-md-row mb-3">       
                            <div class="col-4 d-flex justify-content-center">
                                <img src="portfolioimage/address.png" width="80" height="80" alt="">
                            </div>
                            <div class="col-7" style="line-height: 10px;">
                                <h4 class="text-info">Address</h4>
                                <p>Mandalay, Myanmar,</p>
                                <p>ChanMyaTharZi Township.</p>
                            </div>
                        </div> 
                        <div class="d-flex flex-md-row mb-3">       
                            <div class="col-4 d-flex justify-content-center">
                                <img src="portfolioimage/phone.png" width="70" height="70" alt="">
                            </div>
                            <div class="col-7" style="line-height: 10px;">
                                <h4 class="text-info">Phone Number</h4>
                                <p><a href="tel:+959794982861">09-794982861</a></p>
                                <p><a href="tel:+959262339873">09-262339873</a></p>
                            </div>
                        </div>    
                        <div class="d-flex flex-md-row mb-3">       
                            <div class="col-4 d-flex justify-content-center">
                                <img src="portfolioimage/gmail.png" width="110" height="70" alt="">
                            </div>
                            <div class="col-7" style="line-height: 10px;">
                                <h4 class="text-info">Email</h4>
                                <p><a href="mailto:pchitko29@example.com">pchitko29@gmail.com</a></p>
                            </div>
                        </div><br>
                        <div class="col-12 d-none d-md-flex justify-content-center text-center final-text">
                            <p class="fs-3" style="font-family: ballentine;"><i>"Still learning, always building — 
                                <br>chasing tomorrow with every<br> line of code."</i></p>
                        </div>      
                    </div>             
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center ">
                    <div class="border border-2 border-light rounded-5 w-75 p-4">
                        <h2 class="text-center text-info mb-4">Fill your Information</h2>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('suggest.store') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="phone" value="09262339873" />
                                <label for="nameInput" class="form-label">Your Name</label><br>
                                <input type="text" name="name" id="nameInput" class="form-control" maxlength="30" placeholder="Name"/><br>
                                <label for="emailInput" class="form-label">Your Email</label><br>
                                <input type="email" name="email" id="emailInput" class="form-control" maxlength="30" placeholder="Email"/><br>
                                <label for="messageInput" class="form-label">Any Message</label><br>
                                <input type="text" name="message" id="messageInput" class="form-control" maxlength="30" placeholder="Text your messages"/><br>
                            </div>
                            <button class="login form-control shadow-md" type="submit">Send</button><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
<footer class="container-fluid bg-dark text-light text-center fixed-bottom"> &copy;2025. All rights reserved.</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
