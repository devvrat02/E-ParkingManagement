<?php

           /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		mysqlConnect.php
                            *
            */

$servername="eparkm.mysql.database.azure.com";						//bsdyxgcmc1ij1rsxuiae-mysql.services.clever-cloud.com"; //sql server name
$username="chetan@eparkm";						//ujj3ghjqtx4qdtwy";						//sql User 	
$password="devvrat@01";//fXbl4su78rBnom0pfeWM";					//sql  Password	
$dbname="epark";		//"bsdyxgcmc1ij1rsxuiae";						//sql database
		$con=new mysqli($servername,$username,$password,$dbname);	//Connection Establishment 
		if($con->connect_error)
		{
			die("connection failed" .$conn->connect_error);
		}

?>
