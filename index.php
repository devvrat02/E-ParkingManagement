<!--            /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		index.php
                            *
            */ -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Parking</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <!-- Nav menu  -->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="admin_login.php">Epark</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">login/sign UP</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar" data-aos="fade">
        <div class="container"><a class="navbar-brand pulse animated infinite logo" href="admin_login.php">E-parking</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item item" role="presentation"><a class="nav-link active" href="#home" target="_top" data-bs-hover-animate="swing">HOME</a></li>
                    <li class="nav-item item" role="presentation"><a class="nav-link active" href="login.php" data-bs-hover-animate="pulse">Login/Sign Up</a></li>
                    <li class="nav-item item" role="presentation"><a class="nav-link active" href="#info" data-bs-hover-animate="pulse">Info</a></li>
                    <li class="nav-item item" role="presentation"><a class="nav-link active" href="#about" data-bs-hover-animate="pulse">ABOUT</a></li>
                    <li class="nav-item item" role="presentation"><a class="nav-link active" href="contact-us.php" data-bs-hover-animate="pulse">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="bg-dark border-light clean-block clean-hero" style="color:rgba(9, 162, 255, 0.85);" id="home">
            <div class="text">
                <h2 data-bs-hover-animate="tada">Book Your Parking</h2>
                <p>Check whether parking is available</p><a href="login.php"><button class="btn btn-outline-light btn-lg" type="button"  data-bs-hover-animate="rubberBand">Book now</button></a>
            </div>
        </section>
        <section class="text-light bg-dark clean-block clean-info dark" id="info">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>The application is built with an ultimate goal of contributing our efforts towards the development of cities and a step towards smart cities project.&nbsp;</p>
                </div>
                <div class="row align-items-center">
                    <!--  Google Map -->
                    <div class="col-md-6"><iframe allowfullscreen="" frameborder="0" width="100%" height="400" src="https://www.google.com/maps/d/embed?mid=1SbKn8SvXZhy3zvrCL7lvKjwwhyl4shXJ"></iframe></div>
                    <div class="col-md-6">
                        <h3>E-parking Management</h3>
                        <div class="getting-started-info">
                            <p>Parking owners can contact for collaboration</p>
                        </div><a href="contact-us.php"><button class="btn btn-outline-primary btn-lg" type="button" data-bs-hover-animate="tada" >Contact us</button></a></div>
                </div>
            </div>
        </section>
        <section class="text-light bg-dark clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                    <p>The application allows you to pre-book the parking slot and will also provide the best possible route from your location, so as to ease your parking problems.&nbsp;</p>
                </div>
            </div>
        </section>
        <!--  Team info        -->
        <section class="text-light bg-dark clean-block about-us" id="about">
            <div class="container bg-dark border-dark">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avt1.jpg">
                            <div class="card-body bg-dark info">
                                <h4 class="card-title"><strong>Chetan Malviya</strong><br></h4>
                                <p class="card-text">Team Leader<br></p>
                                <p class="card-text">Web designer,Web developer<br></p>
                                <div class="flash animated infinite icons"><a href="https://www.facebook.com/chetan.malviya.9256"><i class="icon-social-facebook"></i></a><a href="https://www.instagram.com/_devvrat1"><i class="icon-social-instagram"></i></a><a href="https://twitter.com/a_devvrat"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar2.jpg">
                            <div class="card-body bg-dark info">
                                <h4 class="card-title"><strong>Mr. Sandeep Kumar Jain</strong><br><br></h4>
                                <p class="card-text">Mentor<br></p>
                                <div class="flash animated infinite icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg">
                            <div class="card-body bg-dark info">
                                <h4 class="card-title"><strong>Siddharth Khandelwal</strong><br></h4>
                                <p class="card-text">Survey Handler,Representative.<br></p>
                                <div class="flash animated infinite icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar4.jpg">
                            <div class="card-body bg-dark info">
                                <h4 class="card-title"><strong>Manas Solanki</strong><br></h4>
                                <p class="card-text">Hardware Designer.<br></p>
                                <div class="flash animated infinite icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- King login     -->
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <a href="k_log.php">Eparking Management</a>
        </div>
    </footer>
    <!-- Script     -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
