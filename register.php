<?php
session_start();
require 'mysqlConnect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/regis.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
                            <form action="register1.php" method="POST" >
					<h3>New Account?</h3>
					<div class="form-holder" method="POST" action="register.php">
						<span class="lnr lnr-user"></span>
                                                <input type="text" name="username" class="form-control" required="required" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
                                                <input type="text" name="number" class="form-control" required="required" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
                                                <input type="text" name="email" class="form-control" required="required" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                                                <input type="password" name="password" class="form-control" required="required" placeholder="Password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="password_confirm" class="form-control" required="required" placeholder="Confirm Password">
					</div>
					<button>
						<span >Register</span>
					</button>
				</form>
			</div>
			
		</div>
		</body>
</html>