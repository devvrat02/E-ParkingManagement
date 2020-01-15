<?php
session_start();
require 'mysqlConnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Parking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #76b852;
        }
        /* Style the header */
        
        header {
            background-color: #5AFF00;
            padding: 10px;
            font-size: 25px;
            color: solid black;
        }
        /* Create two columns/boxes that floats next to each other */
        
        nav {
            float: left;
            width: 25%;
            height: 300px;
            /* only for demonstration, should be removed */
            background: black;
            padding: 20px;
        }
        /* Style the list inside the menu */
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        article {
            float: left;
            padding: 20px;
            width: 75%;
            background-color: #f4c430;
            height: 300px;
            /* only for demonstration, should be removed */
        }
        /* Clear floats after the columns */
        
        section:after {
            display: table;
            clear: both;
        }
        /* Style the footer */
        
        footer {
            background-color: #5AFF00;
            padding: 10px;
            text-align: center;
            color: solid black;
        }
        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        
        @media (max-width: 600px) {
            nav,
            article {
                width: 100%;
                height: auto;
            }
        }
        
        .user-area .user-avatar {
            float: right;
            width: 40px;
        }</style>
    </head>

<body>
    <header>
    <?php
$a=$_SESSION['eml'];
$b=$_SESSION['name'];
?><h6>
        <div class=''>
        <div class="cart-nav col-xs-4">
           <ul>
             <li class="list-group-item" id="requests">           
                <div class="thumbnail">              
                      <div class="caption">
                      <center>
                        <h3><?=$b?></h3>
                        <p><?=$a?></p>
                        <p><i id="#online" class="fa fa-circle" aria-hidden="true"></i> Online</p>
                        <p><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> lOGOUT</a></p>
                        </center>
                      </div>
                    </div>                   
             </li> </ul>
             </div>
             </div></h6>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="user.php" onclick=''>DASHBOARD</a></li>
                <li><a href='user_book.php'>BOOK PARKING</a></li>
                <li><a href="map.php">LOCATION/PATH</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
            </div>
        </nav>

        <article>
              <iframe class='map' src="https://www.google.com/maps/d/embed?mid=1SbKn8SvXZhy3zvrCL7lvKjwwhyl4shXJ" style="weidth=100% height=100px" ></iframe>
<?php    if(!($a!=null &&$b!=null))         
{
	echo "<script>
				
				window.location.href='login.php';
				</script>";
			
}
?>
        </article>
    </section>

    <footer>
        <p>E-Parking Project</p>
    </footer>

</body>

</html>
