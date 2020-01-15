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
      <form class="login-form" method="post"  action="check_login.php">
        <input type="text" name="email" required="required" placeholder="Email"/>
      <input type="password" required="required" name="password" placeholder="password"/>
      <button type="submit" name="login">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a><br><a href="forget.php">Forget password</a>     
      </p>
    </form>
  </div>
</div>
    </body>
</html>
