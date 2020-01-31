<?php
           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 	    k_log.php --login page for king or management
                            *
            */
?>
<!DOCTYPE html>
<html class="text-monospace text-nowrap text-capitalize text-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Management</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body class="text-monospace text-nowrap text-capitalize text-left text-dark" style="height: 728px;background-color: rgb(0,0,0);">
    <section class="clean-block clean-form dark" style="background-color: rgb(0,0,0);">
        <div class="container text-light">
            <div class="block-heading">
                <h2 class="pulse animated infinite text-info">King</h2>
            </div>
            <form class="bg-dark border rounded border-primary shadow-lg" method="post" target="_self" action="k_check.php">
                <!--jump to k_check -->
                <div class="form-group">Username</label><input class="form-control item" name="username" type="text" data-bs-hover-animate="pulse" id="email"></div>
                <div class="form-group">Password</label><input class="form-control" name="password" type="password" data-bs-hover-animate="pulse" id="password"></div>
                <button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Log In</button></form>
        </div>
    </section>
<!--Script  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>
</html>
