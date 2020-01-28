<?php
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
                    <li><a href="park.php">Parkings</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
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
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard<small>Updates parking</small></h1>
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
                
                <div class="col-md-12">
                    <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form class="text-monospace text-light bg-dark border-dark shadow-sm pulse animated" action="ad_up_pk.php" method="POST">
                    <div class="form-group"><label for="name">Username</label>
                    <input name="username" class="form-control item" type="text" id="name" required="required" placeholder="Username"></div>
                    <div class="form-group"><label for="Email">Email</label>
                    <input name="email" class="form-control item" type="email" id="email" required="required" placeholder="email"></div>
                    <div class="form-group"><label for="Parking">Parking</label>
                    <input name="park" class="form-control item" type="text" id="mob" required="required" placeholder="parking"></div>
                    <div class="form-inline">    <div class="form-group"><label for="location">location</label>
                    <input name="location" class="form-control item" style="width:100%;" type="text" id="location" required="required" placeholder="location"></div>
                 <div class="form-group" ><label for="latitute">latitute</label>
                    <input name="lat" class="form-control item" style="width:100%;" type="text" id="latitute" required="required" placeholder="latitute"></div>
                    <div class="form-group"><label for="longitute">longitute</label>
                    <input name="long" class="form-control item" style="width:100%;" type="text" id="longitute" required="required" placeholder="longitute"></div>
                <div class="form-group"><label for="Slots">Slots</label>
                    <input name="slots" class="form-control item" style="width:100%;" type="number" id="password" required="required" placeholder="Slots"></div>
                    </div>    <div class="form-group"><label for="password">Password</label>
                    <input name="password" class="form-control item" type="password" id="password" required="required" placeholder="Password">
                    </div><button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="pulse">Add Parking</button></form>
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