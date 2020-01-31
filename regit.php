<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		regit.php   user registeration is done by here 
                            *
                            */
session_start();
require 'mysqlConnect.php';
?>
<?php
  $name=$_POST['username'];
  $number=$_POST['number'];	
  $email=$_POST['email'];
	$password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
	
    if($password!=$password_confirm)
	{
		echo "<script>alert('your password is not match with confirm password')</script>";
      echo"<script>window.open('register.php','_self')</script>";
		exit();
	}
	

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo"<script>alert('your email is not valid!')</script>";
      echo"<script>window.open('register.php','_self')</script>";
		exit();
	}
	$sql="select * from users where email='$email'";
	$result=$con->query($sql);
		if($result->num_rows<=0)
		{
			$sql="insert into users(username,number,email,password) values ('$name','$number','$email','$password')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
				$_SESSION['eml']=$email;
				$_SESSION['user']=$name;
				$_SESSION['pwd']=$password;
			
				$con->close();
			header("location:user/");
			exit;
		}
		else{
			echo "<script>alert('you are already registered please log in')</script>";
      echo"<script>window.open('login.php','_self')</script>";
		exit();
		}


?>
