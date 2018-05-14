<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"> </script>
    <title>Login</title>
  </head>
  <body>
    <div class="name">
      <h1>Login</h1>
      <p>Please enter your information</p>
    </div>
    <div class="center">
      <form class="center" action="login-process.php" method="post" id="loginForm">
        Email : <br>
        <input type="text" name="email" id="email"><br>
        Password : <br>
        <input type="password" name="password" id="password"><br>
          <input type="submit" name="login" id="login" value="submit">
      </form>
    </div>
    <div class="center">
      Don't have an account?: <button type="button" onclick="location.href='register.php'">Create an account</button>
    </div>
  </body>
</html>
