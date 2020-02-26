<?php
           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		contact-us.php
                            *
                            */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Epark</title>
    <link rel="shortcut icon" type="image/jpg" href="logo/mono.jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <main class="page contact-us-page">
        <section class="bg-dark clean-block clean-form dark">
            <div class="container bg-dark">
                <div class="block-heading">
                    <h2 class="text-info bg-dark shadow pulse animated infinite">Contact Us</h2>
                </div>
                <form class="text-monospace text-light bg-dark border-dark shadow" style="height: 489px;" method="post" action="contact.php">
                    <div class="form-group"><label>Name</label><input class="form-control" type="text" name="name"></div>
                    <div class="form-group"><label>Subject</label><input class="form-control" type="text" name="subject" ></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
                    <div class="form-group"><label>Message</label><textarea class="form-control" name="msg" ></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" data-bs-hover-animate="flash">Send</button></div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="footer-copyright">
            <p>E-Parking Management</p>
        </div>
    </footer>
<!--  Script    -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bs-animation.js"></script>
</body>

</html>
