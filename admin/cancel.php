<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		cancel.php For database update 
                                by this price changes in the server
                            *
                            */
session_start();
include '../assets/lib.php';
require '../mysqlConnect.php';
$a=$_POST["slot"];
$b=$_SESSION['prk'];
$sql="update $b set status='available',user=' ',In_time=' ',exit_time=' ' where slot='$a'";
if($a){if($con->query($sql)===true)
{
    echo "Data inserted successfilly";
}else{
    echo "error ".$sql."".$con->error;
}

$sql="delete from parkingbook where slots='$a' AND parking='$b'";
$con->query($sql);
       	stat_decrement($b,$con);
       $sql="update `management` set tbook=tbook-1 where id=0";
$con->query($sql);
       
 echo "<script>alert('Data edit succesfully')</script>";
       echo"<script>window.open('clear.php','_self')</script>";
// header("location:clear.php");
exit;
}
else
{
echo "<script>
    window.location.href='clear.php';
    </script>";

}
?>
