<?php

session_start();
require 'mysqlConnect.php';
		$a6=$_POST["email"];
		$a7=$_POST["password"];
	try{
		
		$sql="select * from users where email='$a6' and password ='$a7'";
		$result = $con->query($sql);
		if($result===false)
		{

			die(mysqli_error($con));
		}
		if($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				$a=$row["email"];
				$b=$row["username"];
				$c=$row["password"];
				
						
				$_SESSION['eml']=$a;
				$_SESSION['name']=$b;
				$_SESSION['pwd']=$c;
				$con->close();
				header("location:user.php");
				exit;
				
			}
		}
	}catch(Exception $e)
	{
		echo $e->getMessage();
	}
	$con->close();
				
			echo "<script>
				alert('Your Email or Password Does Not Matched Please Enter Valid Email or Password');
				window.location.href='login.php';
				</script>";
			
?>	