<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		submitParking.php For the update the slot that book by the user
                            *
                            */
session_start();
require '../mysqlConnect.php';

function timeinc($a)
{$timestamp = strtotime($a) + 60*60;

$time = date('H:i', $timestamp);

return $time;}

$a=$_POST["email"];
$b=$_POST["password"];
$c=$_POST["car"];
$d=$_POST["entry"];
$e=timeinc($d);//exit

$f=$_POST["slot"];
$g=$_POST["rate"];
$check=$_SESSION['page'];
$book="booked";
$sql="select * from parkingbook where email='$a' ";
$result=$con->query($sql);
if($result->num_rows==0)
{
//sql query
$sql="insert into parkingbook(email,password,car_number,entry,slots,rates,parking) values('$a','$b','$c','$e','$f','$g','$check')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
				
				
				if($check)
				{
					$sql="update $check set status='booked',user='$c',In_time='$d',exit_time='$e' where slot='$f'";
					if($con->query($sql)===true)
					{
						echo "Data inserted successfilly";
					}else
					{
						echo "error ".$sql."".$con->error;
					}

				}
// 				else if($check=="demo2")
// 				{
// 					$sql="update demo1 set status='booked',user='$c',In_time='$d',exit_time='$e' where slot='$f'";
// 					if($con->query($sql)===true)
// 					{
// 						echo "Data inserted successfilly";
// 					}else
// 					{
// 						echo "error ".$sql."".$con->error;
// 					}

// 				}
				
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
