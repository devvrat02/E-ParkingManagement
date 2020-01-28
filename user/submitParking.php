<?php
session_start();
require '../mysqlConnect.php';
$a=$_POST["email"];
$b=$_POST["password"];
$c=$_POST["car"];
$d=$_POST["entry"];
$e=$_POST["exit"];
$f=$_POST["slot"];
$g=$_POST["rate"];
$check=$_SESSION['page'];
$sql="select * from parkingbook where email='$a' ";
$result=$con->query($sql);
if($result->num_rows==0)
{

$sql="insert into parkingbook(email,password,car_number,entry,exittime,slots,rates,parking) values('$a','$b','$c','$d','$e','$f','$g','$check')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
				
				
				if($check=="demo1")
				{
					$sql="update demo1 set status='booked',user='$c',In_time='$d',exit_time='$e' where slot='$f'";
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
					$sql="update demo2 set status='booked' where slot='$f'";
					if($con->query($sql)===true)
					{
						echo "Data inserted successfilly";
					}else
					{
						echo "error ".$sql."".$con->error;
					}

				}
				
				$con->close();
			header("location:index.php");
			exit;
}
else
{
	echo "<script>
				alert('You are already book your paking slot Check your status');
				window.location.href='book.php';
				</script>";
			
}
?>