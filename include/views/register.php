<!DOCTYPE html>
<html
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <div class="login">
      <h1>Registration</h1>
      <p>Please enter your information</p>
    </div>
    <div class="login">
      <form class="reg" action="register-process.php" method="post">
        <br>
        <input class="form" type="text" name="emailreg" id="email" placeholder="email"><br>
        <br>
        <input class="form" type="password" name="passwordreg" id="password" placeholder="password"><br>
        <input class="button" type="submit" name="reg" id="reg" value="Register">
      </form>
      <div class="login">
        Already have an account: <button class="button" type="button" onclick="location.href='login.php'">Login Page</button>
      </div>
    </div>
  </body>
</html>
