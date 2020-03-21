<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		index.php king dashboard
                            *
                            */
session_start();
require '../mysqlConnect.php';
$name=$_SESSION['name'];
$pwd=$_SESSION['pwd'];
$sql="select * from management where name='$name'";
		$result = $con->query($sql);
		if($result===false)
		{

			die(mysqli_error($con));
		}
		if($result->num_rows > 0)
		{
			
			while($row=$result->fetch_assoc())
			{
                $tbook=$row["tbook"];
                $park=$row["park"];
                $earn=$tbook*10;
                
            }
        }
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
                    <li class="active"><a href="index.php">Dashboard</a></li>
                    <li><a href="park.php">Parkings</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome,<?=$name?></a></li>
                    <li><a href="../logout.php">Logout</a></li>
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
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Give Parking
                <span class="caret"></span>
              </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="#addPage">Update</a></li>
                            <li><a href="#">Add Parking</a></li>
                            <li><a href="#">Delete Parking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item active main-color-bg">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                        </a>
                        <a href="park.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Parkings</a>
                        <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Admins</a>
                    </div>

                    
                </div>
                <div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Dashboard</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="fa fa-car" aria-hidden="true"></span> <?=$park?></h2>
                                    <h4>Online Parkings</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-check" aria-hidden="true"></span><?=$park?></h2>
                                    <h4>Parkings</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-th" aria-hidden="true"></span><?=$earn?></h2>
                                    <h4>Earnning</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><?=$tbook?></h2>
                                    <h4>Usage</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Users -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php    if($name!=null &&$pwd!=null){
                $_SESSION['name']=$name;
                $_SESSION['pwd']=$pwd;
            } else        
{
	echo "<script>
				
				window.location.href='../k_log.php';
				</script>";
			
}
?>
