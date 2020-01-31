<?php

           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		k_check.php --Check the king is valid or  not
                            *
            */

session_start();
require 'mysqlConnect.php';
		$a6=$_POST["username"];
		$a7=$_POST["password"];
	try{
		
		$sql="select * from management where name='$a6' and password ='$a7'";
		$result = $con->query($sql);
		if($result===false)
		{

			die(mysqli_error($con));
		}
		if($result->num_rows > 0)
		{
			while($row=$result->fetch_assoc())
			{
				$b=$row["name"];
				$c=$row["password"];
				$d=$row["park"];
				$e=$row["tbook"];
				$_SESSION['name']=$b;
				$_SESSION['pwd']=$c;
				$_SESSION['park']=$row["park"];
				$_SESSION['tbook']=$row["tbook"];
				$con->close();
				header("location:king/"); //jump to king login page
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
				window.location.href='index.php';
				</script>";
			
?>	
