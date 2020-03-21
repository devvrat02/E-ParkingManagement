<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya
                            * Filename: 		index.php admin-dashboard
                            *
                            */
session_start();
require '../mysqlConnect.php';
$a=$_SESSION['eml'];
$b=$_SESSION['name'];
$d=$_SESSION['prk'];
            $rate=$_SESSION['rate'];
			$stat=$_SESSION['stat'];
			$slots=$_SESSION['slots'];
// 			$book=$_SESSION['book'];
// 			$feed=$_SESSION['feed'];
$sql="SELECT * FROM `$d` WHERE status='booked'";
$result1=$con->query($sql);
$book= $result1->num_rows;
$sql="SELECT * FROM `$d` WHERE book='unavailable'";
$result1=$con->query($sql);
$feed= $result1->num_rows;
$sql="update `admin` set `book`=$book ,`feed`=$feed where park='$d'";
$result1=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="5" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin|Dashboard</title>
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
                <a class="navbar-brand" href="#">Epark|Admin</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Dashboard</a></li>
                    <li><a href="vehicles.php">Vehicles</a></li>
                    <li><a href="rates.php">Rates</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Welcome, <?=$b?></a></li>
                    <li><a href="../logout.php">Logout</a></li>
<!--logout button 			 -->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Status of Parking</small></h1>
                </div>
                <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Update Parking
                <span class="caret"></span>
              </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a type="button" data-toggle="modal" data-target="vehicles.php">Status</a></li>
<!--                             <li><a href="#">Give Slot</a></li> -->
                            <li><a href="clear.php">Clear Slot</a></li>
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
                        <a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Dashboard </a>
                        <a href="vehicles.php" class="list-group-item"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Vehicles </a>
                        <a href="rates.php" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Rates </a>
                    </div>

<!--                     <div class="well">
                        <h4>Parking Status</h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                60%
                            </div>
                        </div>
                        <h4>On Stand </h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                40%
                            </div>
                        </div>
                    </div> -->
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
                                    <h2><span class="fa fa-car" aria-hidden="true"></span> <?=$feed?></h2>
                                    <h4>Cars</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-check" aria-hidden="true"></span> <?=$book?></h2>
                                    <h4>Book Slots</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-th" aria-hidden="true"></span> <?=$slots?></h2>
                                    <h4>Slots</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><?=$stat?></h2>
                                    <h4>Stats</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Users -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>
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
<?php    if($a!=null &&$b!=null){
                $_SESSION['emal']=$a;
                $_SESSION['psd']=$b;
            } else        
{
	echo "<script>
// for not the other one can login	
				
				window.location.href='admin_login.php';
				</script>";
			
}
?>
