<?php

session_start();
require 'mysqlConnect.php';
		$a6=$_POST["username"];
		$a7=$_POST["password"];
	try{
		
		$sql="select * from admin where username='$a6' and password ='$a7'";
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
				$d=$row["park"];
						
				$_SESSION['eml']=$a;
				$_SESSION['name']=$b;
				$_SESSION['pwd']=$c;
				$_SESSION['prk']=$d;
				$con->close();
				header("location:admin.php");
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
				window.location.href='admin_login.php';
				</script>";
			
?>	