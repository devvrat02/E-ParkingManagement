<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		upprice.php For database update 
                                by this price changes in the server
                            *
                            */
session_start();
require '../mysqlConnect.php';
$a=$_POST["rate"];
$b=$_SESSION['prk'];
$sql="update admin set rate='$a' where park='$b'";
if($a){if($con->query($sql)===true)
{
    echo "Data inserted successfilly";
    $_SESSION['rate']=$a;
}else{
    echo "error ".$sql."".$con->error;
}
header("location:rates.php");
exit;
}
else
{
echo "<script>
    window.location.href='rates.php';
    </script>";

}
?>
