<?php
session_start();
require 'mysqlConnect.php';
$a=$_SESSION["emal"];
$b=$_SESSION["psd"];
$sql="select * from parkingbook where email='$a'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo "<table border='1'><tr><th>Email_ID</th><th>Car_Number</th><th>Slot</th><th>Rate</th><th>Entry time</th><th>Exit_Time</th></tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["email"]."</td>";
		echo "<td>".$row["car_number"]."</td>";
		echo "<td>".$row["slots"]."</td>";
		echo "<td>".$row["rates"]."</td>";
		echo "<td>".$row["entry"]."</td>";
		echo "<td>".$row["exittime"]."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "<h5>Parking Not Book</h5>";
}


?>
