<?php

$servername="localhost";
$username="root";
$password="";
$dbname="epark";
		$con=new mysqli($servername,$username,$password,$dbname);
		if($con->connect_error)
		{
			die("connection failed" .$conn->connect_error);
		}

?>