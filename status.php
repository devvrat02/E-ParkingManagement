<?php
session_start();
require 'mysqlConnect.php';

$a=$_SESSION["emal"];
$b=$_SESSION["psd"];

$sql="select * from parkingbook where email='$a'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo "<form method='post' action='cancel.php' name='frm'><table border='1'><tr><th>Email_ID</th><th>Car_Number</th><th>Slot</th><th>Rate</th><th>Entry time</th><th>Exit_Time</th></tr>";
	while($row=$result->fetch_assoc())
	{
		$em=$row["email"];
		$pd=$row["password"];
		echo "<input type='hidden' name='email' value='$em'><input type='hidden' name='password' value='$pd'><tr><td>".$row["email"]."</td>";
		echo "<td>".$row["car_number"]."</td>";
		echo "<td>".$row["slots"]."</td>";
		echo "<td>".$row["rates"]."</td>";
		echo "<td>".$row["entry"]."</td>";
		echo "<td>".$row["exittime"]."</td></tr>";
	}
	echo "<input type='submit' value='cancel'></form></table>";
}

else{
	echo "<h6>You Are not Book Your Parking Slot Yet</h6>";
}

?>
