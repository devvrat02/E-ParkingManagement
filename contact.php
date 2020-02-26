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
  $name=$_POST['name'];
  $subject=$_POST['subject'];	
  $email=$_POST['email'];
	$message=$_POST['msg'];
	

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo"<script>alert('your email is not valid!')</script>";
      echo"<script>window.open('contact.php','_self')</script>";
		exit();
	}
	$sql="select * from contact where email='$email'";
	$result=$con->query($sql);
		if($result->num_rows<=0)
		{
			$sql="insert into contact(name,subject,email,message) values ('$name','$subject','$email','$message')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
                
				$con->close();
                echo "<script>alert('We Will Contact Soon For More info')</script>";
                echo"<script>window.open('index.php','_self')</script>";
                // header("location:index.php");
			exit;
		}
		else{
			echo "<script>alert('You already contact us that request being forward')</script>";
      echo"<script>window.open('index.php','_self')</script>";
		exit();
		}

?>
