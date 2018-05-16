<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js">  </script>
    <title>Login</title>
  </head>
  <body class="">
    <div class="login">
      <div class="login">
        <h1>Login</h1>
        <p>Please enter your information</p>
      </div>
      <div class="login">
        <form class="" action="login-process.php" method="post" id="loginForm">
        <br>
          <input class="form" type="text" name="email" id="email" placeholder="email"><br>
          <br>
          <input class="form" type="password" name="password" id="password" placeholder="password"><br>
            <input class="button" type="submit" name="login" id="login" value="Login">
        </form>
      </div>
      <div class="login">
        Don't have an account?: <button class="button" type="button" onclick="location.href='register.php'">Create an account</button>
      </div>
    </div>

  </body>
</html>
