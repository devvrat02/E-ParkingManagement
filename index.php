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
      <form class="register-form" method="POST" action="user.php">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
      <form class="login-form" action="user.php">
        <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>
    </body>
</html>
