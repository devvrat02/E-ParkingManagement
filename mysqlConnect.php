<?php

$servername="bsdyxgcmc1ij1rsxuiae-mysql.services.clever-cloud.com";
$username="ujj3ghjqtx4qdtwy";
$password="fXbl4su78rBnom0pfeWM";
$dbname="bsdyxgcmc1ij1rsxuiae";
		$con=new mysqli($servername,$username,$password,$dbname);
		if($con->connect_error)
		{
			die("connection failed" .$conn->connect_error);
		}

?>
