<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		cancel.php
                            * For the database work
                            */
session_start();
include '../assets/lib.php';
require '../mysqlConnect.php';
$a=$_POST["email"];
$b=$_POST["password"];
$sql="select * from parkingbook where email='$a'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$park=$row["parking"];
		$slot=$row["slots"];
		

		$sql="update $park set status='available',user=' ',In_time=' ',exit_time=' ' where slot='$slot'";
			echo $sql;
		if($con->query($sql)===true)
		{
			echo "Data inserted successfilly";
		}else
		{
			echo "error ".$sql."".$con->error;
		}

	}

	}
				
	stat_decrement($park,$con);				
				
$sql="delete from parkingbook where email='$a' ";
$con->query($sql);
$sql="update `management` set tbook=tbook-1 where id=0";
$con->query($sql);
				
				$con->close();
	header("location:book.php");
	exit;
?>
