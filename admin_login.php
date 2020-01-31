<?php
                            /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		admin_login  Admin login Page
                            *
                            */
session_start();
require 'mysqlConnect.php'; //Establishing  Connection
?>
<!DOCTYPE html>
<html class="text-monospace text-nowrap text-capitalize text-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin - ePark</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
<!-- Add the css File  -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body class="text-monospace text-nowrap text-capitalize text-left text-dark" style="background-color: rgb(0,0,0);height: 650px;">
    <section class="shadow-none clean-block clean-form dark" style="filter: hue-rotate(0deg) saturate(100%);height: 604px;">
        <div class="container-fluid text-dark bg-dark" style="height: 511px;">
            <div class="block-heading">
                <h2 class="text-secondary shadow text-info">Login</h2>
                <p></p>
            </div>
<!-- Login Box -->
            <form class="text-capitalize text-light bg-dark border rounded border-dark shadow-lg" method="post" target="_self" action="admincheck.php" style="width: 315px;height: 279px;padding: 22px;">
                <div class="form-group"><label for="name">Username/email</label><input class="form-control item" type="text" name="username" id="name" placeholder="username"></div>
                <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" name="password" id="email" placeholder="password"></div>
                <button class="btn btn-primary btn-block" type="submit">Sign In</button></form>
        </div>
        <footer class="text-monospace bg-dark border-dark shadow-lg page-footer dark" style="height: 118px;">
            <div class="footer-copyright">
                <p>Eparking Management</p>
            </div>
        </footer>
        <div></div>
        <div></div>
    </section>
<!-- Scripts  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>
