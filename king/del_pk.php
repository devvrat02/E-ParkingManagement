<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal
                            * Filename: 		del_pk.php  Delete the parking 
                            *
                            */
session_start();
require '../mysqlConnect.php';
$name=$_SESSION['name'];
$pwd=$_SESSION['pwd'];
?>
<?php	
// The sql work done here


  $park=$_POST['park'];

	$sql="select * from admin where  ";
	$result=$con->query($sql);
		if($result->num_rows<=0)
		{
			$sql="delete into admin where park='$park'";
				if($con->query($sql)===true)
				{
					echo "Parking Deleted successfully";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
			//header("location:park.php");
			exit;
		}
		else{
			echo "<script>alert('you are already registered please log in')</script>";
      echo"<script>window.open('../login.php','_self')</script>";
		exit();
		}


?>
<?php    if($name!=null &&$pwd!=null){
                $_SESSION['name']=$name;
                $_SESSION['pwd']=$pwd;
            } else        
{
	echo "<script>
				
				window.location.href='add_park.php';
				</script>";
			
}
?>
