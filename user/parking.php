<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		parking.php for booking the slots
                            *
                            */
session_start();
require '../mysqlConnect.php';
$a=$_SESSION["emal"];
$b=$_SESSION["psd"];
$sql="select * from parkingbook where email='$a' ";
$result=$con->query($sql);
if($result->num_rows==0)
{
	$rat="";
	$sql="select * from demo1";
	$result=$con->query($sql);
	$check="demo1";
	if($result->num_rows>0)
	{
		echo "<form action='submitParking.php' method='post'><table >";
		$sql="select * from admin";
		$result1=$con->query($sql);
		if($result1->num_rows>0)
		{
			while($row=$result1->fetch_assoc())
			{
				$rt=$row["park"];
				if($rt=="demo1")
				{
					$rat=$row["rate"];
					echo "<h6>".$row['parkname']."</h6>";
					echo "<h6>".$row['rate'].".Rs/Day</h6>";
				}
			}
		}
		while($row=$result->fetch_assoc())
		{
			$st=$row["status"];
			$sl=$row["slot"];
			$sb=$row["book"];
			if($st=="available" && $sb=="available")
			{
			echo "<tr><td>Parking Slot<input type='radio' name='slot' value='$sl'>".$sl."</td></tr>";
			}
		}
		$_SESSION['page']=$check;
		echo "<input type='hidden' value='$a' name='email'><input type='hidden' value='$b' name='password'><input type='hidden' value='$rat.Rs/Hour' name='rate'><input type='text' required='required' name='car' placeholder='Car Number'>";
		echo "Entry  Time::<input type='time' required='required' name='entry' placeholder='Entry Time'>";
		echo "<button>Book Now</button></form></table>";
	}
}
else{
	echo "<h1>You Already Book Your Parking Slot</h1>";
}


?>
