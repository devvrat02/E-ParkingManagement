<?php
 /*
                            *
                            * Project Name: 	E-parking Management
                            * Author List: 		Chetan Malviya,Siddharth Khandelwal 
                            * Filename: 		book.php for booking
                            *
                            */
session_start();
require '../mysqlConnect.php';
?>
<?php
$a=$_SESSION['eml'];
$b=$_SESSION['name'];
if(!($a!=null &&$b!=null))         
{
	echo "<script>
				
				window.location.href='login.php';
				</script>";
			
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User|Book</title>
    <link rel="shortcut icon" type="image/jpg" href="../logo/mono.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <script src="js/ajax.js"></script>
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
                    <li class="active"><a href="book.php">Booking</a></li>
                    <li><a href="path.php">Route</a></li>
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
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Booking Dashboard <small>Book your slot</small></h1>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active">Book</li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="index.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </a>
                        <a href="path.php" class="list-group-item "><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Location/Path</a>
                        <a href="book.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Book Slot</a>
                    </div>

                    <div class="well" >
                    <h4>Book Parking</h4><a href="book.php">
                    <button class="list-group-item" onmouseover='func();'> Book</button></a>
                    </div>
                </div><div class="col-md-9">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Book</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                             <span>               
                             <?php
if($a!=null &&$b!=null)
{    echo "<form name='form' ><input type='hidden' value='$a' id='userid'><input type='hidden' id='password' value='$b'></form>";
echo "</a><th></th></a><br>";
$_SESSION['emal']=$a;
$_SESSION['psd']=$b;}
?>
                            <div class="col-md-2">
                    <div class="dropdown create">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Book Parking
                <span class="caret"></span>
              </button><div class="col-md-2"></div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a onclick='fun();'>Parking 1</a></li>
                            <li><a onclick='fun2();'>Parking 2</a></li>
                        </ul>
                    </div>
                </div> 
                <div id='page1' style='padding:10%'></div>
                <div class="col-md-2" style='padding:2%;'>
                <button class="btn bbtn-default" onmouseover='func();'>Status</button>
                </div>
                    
</span>
                                
                                </div>
                            </div>
                            <br>

                        </div>
                    </div>

                </div>
    
    </section>

    <footer id="footer">
        <p>E-Parking</p>
    </footer>
<!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
$a=$_SESSION['eml'];
$b=$_SESSION['name'];
if(!($a!=null &&$b!=null))         
{
	echo "<script>
	//for authenticity			
				window.location.href='../login.php';
				</script>";
			
}
?>
