<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		status.php for the status of booking
                            *
                            */
session_start();
require '../mysqlConnect.php';

$a=$_SESSION["emal"];
$b=$_SESSION["psd"];

$sql="select * from parkingbook where email='$a'";
$result=$con->query($sql);
if($result->num_rows>0)
{
	echo "<form method='post' action='cancel.php' name='frm'>";
	while($row=$result->fetch_assoc())
	{
	echo '<div class="card text-white bg-dark mb-3" style="width: 20%;">';
	echo '<div class="bg-dark" >';
	echo "<center>";
	echo '<h6 class="card-title">Ticket</h6>';
	$em=$row["email"];
		$pd=$row["password"];
// 		Printing the ticket
		echo "<input type='hidden' name='email' value='$em'><input type='hidden' name='password' value='$pd'>";
		echo "<h6>User:".$row["email"]."</h6>";
		echo "<h6>Car no:".$row["car_number"]."</h6>";
		echo "<h6>Slots:".$row["slots"]."</h6>";
		echo "<h6>Price:".$row["rates"]."</h6>";
		echo "<h6>Entry time:".$row["entry"]."</h6>";
		echo "<h6>Parking:".$row["parking"]."</h6>";
		echo "</center>";
	echo "<button type='submit' class='btn btn-primary'>Cancel</button>";
	echo	"</div>	  </div>";
	
	}
	echo "</table>";
}

else{
	echo "<h1>Please Book Parking</h1>";
}


?>
