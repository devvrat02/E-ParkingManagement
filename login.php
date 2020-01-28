<?php
session_start();
require 'mysqlConnect.php';
?>
<!DOCTYPE html>
<html class="text-monospace text-nowrap text-capitalize text-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body class="text-monospace text-nowrap text-capitalize text-left text-dark" style="height: 565px;background-color: rgb(0,0,0);">
    <section class="shadow-none clean-block clean-form dark" style="filter: hue-rotate(0deg) saturate(100%);height: 631px;">
        <div class="container-fluid text-dark bg-dark" style="height: 511px;">
            <div class="block-heading">
                <h2 class="text-secondary shadow text-info">Login</h2>
                <p></p>
            </div>
            <form class="text-capitalize text-light bg-dark border rounded border-dark shadow-lg" method="post" action="check_login.php" style="width: 323px;height: 315px;padding: 22px;">
                <div class="form-group"><label for="email">Username/email</label><input class="form-control item" type="email" id="name" name="email" placeholder="Email" ></div>
                <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" id="Password" name="password" placeholder="password"></div>
                <button class="btn btn-primary btn-block" type="submit" name="login">Sign In</button>
                <div><center><a href="#">Forget Password</a><br><a href="register.php">Register</a></center></div>
            </form>
        </div>
        <footer class="text-monospace bg-dark border-dark shadow-lg page-footer dark">
            <div class="footer-copyright">
                <p style="height: 39px;">Eparking Management</p>
            </div>
        </footer>
        <div></div>
        <div></div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>