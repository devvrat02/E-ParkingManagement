<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-wiadth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    a:link {
  color: red;}
  .map {
            height: 100%;
            width: 100%;
            min-height: 400px;
            min-width: 540px;
  }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="bg-success">
    <div class="d-flex bg-textlight justify-content-around" >
       <b> <div class="p-2 bg-success flex-fill justify-content-center"><a href='index.php'>HOME</a></div></b>
       <b>  <div class="p-2 bg-success flex-fill justify-content-center"><a href='login.php'>LOGIN</a></div></b>
       <b>  <div class="p-2 bg-success flex-fill justify-content-center"><a href='admin_login.php'>ADMIN</a></div></b>
       <b>  <div class="p-2 bg-success flex-fill justify-content-center"><a href='about.php'>ABOUT</a></div></b>
       <b>  <div class="p-2 bg-success flex-fill justify-content-center"><a href='team.php'>TEAM</a></div></b>
    </div>

    <div class="container align-middle bg-danger justify-content-center" style="padding:2%; max-width: 50%;max-height: 60%;">
        <div class=" col-sm-10 " style="display: block; font-size: large;font-family: sans-serif;">
        <iframe class='map' frameborder='0' height='465px' width='470px' src="https://www.google.com/maps/d/embed?mid=1SbKn8SvXZhy3zvrCL7lvKjwwhyl4shXJ" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    </div>

    <div class="d-flex bg-primary justify-content-center" style="margin-top:1px">
        <p>E Parking Management</p>
    </div>
</body>
</html>