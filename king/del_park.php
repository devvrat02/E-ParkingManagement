<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal
                            * Filename: 		del_park delete parking
                            *
                            */
session_start();
require '../mysqlConnect.php';
$name=$_SESSION['name'];
$pwd=$_SESSION['pwd'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kings|Dashboard</title>
    <link rel="shortcut icon" type="image/jpg" href="../logo/mono.jpg">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="#">Epark|King</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Dashboard</a></li>
                    <li ><a href="park.php">Parkings</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome,<?=$name?></a></li>
                    <li><a href="../logout.html">Logout</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard<small>Check parking</small></h1>
                </div>
                
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Delete Parking</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
                <div class="col-md-12">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Parking list</h3>
                        </div>
                        <div class="panel-body">
                        <?php
		
		$sql="select * from admin ";
		$result = $con->query($sql);
		if($result===false)
		{

			die(mysqli_error($con));
		}
		if($result->num_rows > 0)
		{
			echo "<table class='table table-striped table-hover'><tr><th>Admin</th><th>Location</th><th>Rates</th><th>Slots</th><th>User</th><th>Password</th></tr>";
			while($row=$result->fetch_assoc())
			{
				$user=$row["username"];
				$pass=$row["password"];
				$admin=$row["admin"];
				$loc=$row["location"];
				$rate=$row["rate"];
				$slot=$row["slots"];

                echo "<tr><td>".$admin."</td>";
				echo "<td>".$loc."</td>";
				echo "<td>".$rate."</td>";
                echo "<td>".$slot."</td>";
                echo "<td>".$user."</td>";
				echo "<td>".$pass."</td>";			
		}			echo "</table>";
    }	
?>	

                        </div>
                    </div>

                    <!-- Latest Users -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                            <form class="text-monospace text-light bg-dark border-dark shadow-sm pulse animated" action="del_pk.php" method="POST">
                            <div class="form-group"><label for="park">Insert Parking Name that going to delete</label>
                    <input name="park" class="form-control item" type="text" id="del_parking" required="required" placeholder="Parking name">
                    </div><button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Add Parking</button></form>
            </div></h3>
                        </div>
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php  
  if($name!=null &&$pwd!=null){
                $_SESSION['name']=$name;
                $_SESSION['pwd']=$pwd;
            } else        
{
	echo "<script>
				
				window.location.href='../k_log.php';
				</script>";
			
}
?>
