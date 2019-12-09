<?php
session_start();
require 'mysqlConnect.php';
?>
<?php
if(isset($_POST['register'])){
  $name=mysqli_real_escape_string($con,$_POST['name']);
  $number=mysqli_real_escape_string($con,$_POST['number']);	
  $email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
    $password_confirm=mysqli_real_escape_string($con,$_POST['password_confirm']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo"<script>alert('your email is not valid!')</script>";
      echo"<script>window.open('index.php','_self')</script>";
		exit();
	}

	$sel_email="select * from users where email='$email'";
	$run_email=mysqli_query($con,$sel_email);
	$check_email=mysqli_num_rows($run_email);

	if($check_email==1){
		echo"<script>alert('This email is already registered,try another one!')</script>";
      echo"<script>window.open('register.php','_self')</script>";
		exit();
	}
	else{
		$_SESSION['driver_email']=$email;
		$insert="INSERT INTO `users` (`id`, `name`,`number`, `email`, `password`) VALUES (NULL, '$name', '$email','$number' ,'$password')";
		$run_insert=mysqli_query($con,$insert);
		if($run_insert){
			echo"<script>alert('registration successful,welcome!')</script>";
      echo"<script>window.open('user.php','_self')</script>";


		}
}
}
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
                            <form action="index.php" method="POST" >
					<h3>New Account?</h3>
					<div class="form-holder" method="POST" action="register.php">
						<span class="lnr lnr-user"></span>
                                                <input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
                                                <input type="text" name="number" class="form-control" placeholder="Phone Number">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
                                                <input type="text" name="email" class="form-control" placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password">
					</div>
					<button>
						<span >Register</span>
					</button>
				</form>
			</div>
			
		</div>
		</body>
</html>