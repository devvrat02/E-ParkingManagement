<?php
           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		check_login comes through user login
                            *
                            */
session_start();
require 'mysqlConnect.php';
		$a6=$_POST["email"];						//user email
		$a7=$_POST["password"];						//user password 
	try{
		
		$sql="select * from users where email='$a6' and password ='$a7'";	//sql query
		$result = $con->query($sql);			//execution
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
				$c=$row["password"];///No Means thats temporary variable no  use 
				
						//session for values send
				$_SESSION['eml']=$a;
				$_SESSION['name']=$b;
				$_SESSION['pwd']=$c;
				$con->close();
				header("location:user/index.php"); //jump to user index
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
				</script>";//else login again
			
?>	
