<?php

//            /*
//                             *
//                             * Project Name: 	E-parking Management
//                             * Author List: 		Chetan Malviya
//                             * Filename: 		logout.php
//                             *For closing the connection
//             */
session_start();
session_destroy();
header("location:index.php");
exit();
?>
