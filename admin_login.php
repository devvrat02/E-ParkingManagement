<?php
session_start();
require 'mysqlConnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/ep.css">
        <script src="js/ep.js"></script>
        <title>Eparking</title>
    </head>
    <body>
       <div class="login-page">
  <div class="form">
      
   
      <form class="login-form" method="post" action="admincheck.php">
        <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="login">login</button>
      <p class="message"><br><a href="forget.php">Forget password</a>     
      </p>
    </form>
  </div>
</div>
    </body>
</html>