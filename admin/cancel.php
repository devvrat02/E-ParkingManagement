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
require '../mysqlConnect.php';
$a=$_POST["slot"];
$b=$_SESSION['prk'];
$sql="update $b set status='available',user=' ',In_time=' ',exit_time=' ' where slot='$slot'";
if($a){if($con->query($sql)===true)
{
    echo "Data inserted successfilly";
    $_SESSION['rate']=$a;
}else{
    echo "error ".$sql."".$con->error;
}

$sql="delete from parkingbook where slot='$slot',parking='$b'";
$con->query($sql);


header("location:clear.php");
exit;
}
else
{
echo "<script>
    window.location.href='clear.php';
    </script>";

}
?>
