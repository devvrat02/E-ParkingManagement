<?php
session_start();
require 'mysqlConnect.php';
$a=$_POST["email"];
$b=$_POST["password"];
$c=$_POST["car"];
$d=$_POST["entry"];
$e=$_POST["exit"];
$f=$_POST["slot"];
$g=$_POST["rate"];
$sql="select * from parkingbook where email='$a' ";
$result=$con->query($sql);
if($result->num_rows==0)
{

$sql="insert into parkingbook(email,password,car_number,entry,exittime,slots,rates) values('$a','$b','$c','$d','$e','$f','$g')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
				$check=$_SESSION['page'];
				echo $check;
				if($check=="demo1")
				{
					$sql="update demo1 set status='unavailable',user='$c' where slot='$f'";
					if($con->query($sql)===true)
					{
						echo "Data inserted successfilly";
					}else
					{
						echo "error ".$sql."".$con->error;
					}

				}
				else if($check=="demo2")
				{
					$sql="update demo2 set status='unavailable' where slot='$f'";
					if($con->query($sql)===true)
					{
						echo "Data inserted successfilly";
					}else
					{
						echo "error ".$sql."".$con->error;
					}

				}
				
				$con->close();
			header("location:user.php");
			exit;
}
else
{
	echo "<script>
				alert('You are already book your paking slot check your status');
				window.location.href='user.php';
				</script>";
			
}
?>