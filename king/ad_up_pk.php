<?php
session_start();
require '../mysqlConnect.php';
$name=$_SESSION['name'];
$pwd=$_SESSION['pwd'];
?>
<?php
  $username=$_POST['username'];
  $email=$_POST['email'];	
  $park=$_POST['park'];
  $location=$_POST['location'];
  $lat=$_POST['lat'];
  $long=$_POST['long'];  	
  $slots=$_POST['slots'];  	
  $password=$_POST['password'];

	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		echo"<script>alert('your email is not valid!')</script>";
      echo"<script>window.open('add_park.php','_self')</script>";
		exit();
	}

	$sql="select * from admin  ";//where park='$park'
	$result=$con->query($sql);
		if($result->num_rows<=0)
		{
			$sql="insert into `admin`(`username`,`password`, `email`, `park`, `location`, `lat`, `lon`, `admin`, `slots`) values ('$username','$password','$email','$park','$location','$lat','$long','$slots')";
				if($con->query($sql)===true)
				{
					echo "Data inserted successfilly";
				}else
				{
					echo "error ".$sql."".$con->error;
				}
			header("location:park.php");
			exit;
		}
		else{
			echo "<script>alert('you are already registered please log in')</script>";
      echo"<script>window.open('login.php','_self')</script>";
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