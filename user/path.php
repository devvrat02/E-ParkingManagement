<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		path.php For route of the parking where the user book the slot
                            *
                            */
session_start();
require '../mysqlConnect.php';
?>
    <?php
$a=$_SESSION['eml'];
$b=$_SESSION['name'];
$route="book.php";
$sql="select * from parkingbook where email='$a'";
$result=$con->query($sql);
if($result->num_rows>0)
{	while($row=$result->fetch_assoc())
    {$park=$row["parking"];
        $sql="select * from admin where park='$park'";
$result=$con->query($sql);
    if($result->num_rows>0)
    {   while($row=$result->fetch_assoc())
        {   $route="https://www.google.com/maps/@".$row["lat"].",".$row["lon"].",16z";
        }
    }
}}
?><h6>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User|Route</title>
    <link rel="shortcut icon" type="image/jpg" href="../logo/mono.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                <a class="navbar-brand" href="#">Epark|User</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="book.php">Booking</a></li>
                    <li class="active"><a href="path.php">Route</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="profile.php">Welcome, <?=$b?></a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Location <small>Route to the parking</small></h1>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Location</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </a>
                        <a href="path.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Location/Path</a>
                        <a href="book.php" class="list-group-item"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Book Slot</a>
                    </div>

                    <div class="well">
                    <h4>Book Parking</h4><a href="<?=$route?>">
                    <button class="list-group-item" type="button">Route</button></a>
                    </div>
                </div>
                <div class="col-md-6">                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Dashboard</h3>
                        </div><iframe allowfullscreen="" frameborder="0" width="100%" height="310" src="https://www.google.com/maps/d/embed?mid=1SbKn8SvXZhy3zvrCL7lvKjwwhyl4shXJ"></iframe></div>
                <div class="col">
                <div class="col-md-3">
                    <div class="well">
                        <p>
                        <h4> Details :- </h4>
                        <h4> This is for providing the Shortest distance by that you can got to our parking where you book your slot</h4>
                        </p>

                    </div>

                    <div class="well">
                            
                    </div>
                </div>
                </div>
    </section>

    <footer id="footer">
        <p>E-Parking</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php    if(!($a!=null &&$b!=null))         
{
	echo "<script>
				
				window.location.href='../login.php';
				</script>";
			
}
?>
