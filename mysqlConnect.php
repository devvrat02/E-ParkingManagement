<?php

           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		mysqlConnect.php
                            *
            */
echo '<link rel="shortcut icon" type="image/jpg" href="../logo/mono.jpg">';
$servername="";	 //sql server name
$username="";												//sql User 	
$password="";					//sql  Password	
$dbname="";								//sql database
		$con=new mysqli($servername,$username,$password,$dbname);	//Connection Establishment 
		if($con->connect_error)
		{
			die("connection failed" .$conn->connect_error);
		}

?>
