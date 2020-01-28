<?php
session_start();
require 'mysqlConnect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Epark</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body style="color: rgb(0,0,0);">
    <main class="page registration-page">
        <section class="bg-dark clean-block clean-form dark">
            <div class="container bg-dark">
                <div class="bg-dark block-heading">
                    <h2 class="text-info bg-dark border-dark shadow shake animated">Registration</h2>
                </div>
                <form class="text-monospace text-light bg-dark border-dark shadow-sm pulse animated" action="regit.php" method="POST">
                    <div class="form-group"><label for="name">Name</label>
                    <input name="username" class="form-control item" type="text" id="name" required="required" placeholder="Username"></div>
                    <div class="form-group"><label for="Email">Email</label>
                    <input name="email" class="form-control item" type="email" id="email" required="required" placeholder="Username"></div>
                    <div class="form-group"><label for="Number">Mobile NO</label>
                    <input name="number" class="form-control item" type="text" id="mob" required="required" placeholder="Username"></div>
                    <div class="form-group"><label for="password">Password</label>
                    <input name="password" class="form-control item" type="password" id="password" required="required" placeholder="Username"></div>
                    <div class="form-group"><label for="confirm_password">Confirm Password</label>
                    <input name="password_confirm" class="form-control item" type="password" id="confirm_password" required="required" placeholder="Confirm Password">
                    </div><button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Sign Up</button></form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>E-Parking Management</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>