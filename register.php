<?php
session_start();

if (isset($_SESSION['Email'])) {
  header('Location: index.php');
} else if (isset($_GET['registerfail'])) {
  echo "The e-mail adress is already in use";
}

 ?>
<!DOCTYPE html>
<html
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <div class="name">
      <h1>Registration</h1>
      <p>Please enter your information</p>
    </div>
    <div class="center">
      <form class="reg" action="register-process.php" method="post" onsubmit="return checkLogin();">
        Email : <br>
        <input type="text" name="emailreg" id="emailreg"><br>
        Password : <br>
        <input type="password" name="passwordreg" id="passwordreg"><br>
        <input type="submit" name="reg" id="reg" value="submit">
      </form>
      <div class="">
        Already have an account: <button type="button" onclick="location.href='login.php'">Login Page</button>
      </div>
    </div>
  </body>
</html>
