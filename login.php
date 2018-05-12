<?php
  session_start();
  
  if (isset($_SESSION['Email'])) {
    header('Location: index.php');
  } else if (isset($_GET['loginfail'])) {
    echo "Email or password is incorrect!";
  }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="assets/css/main.css">
     <script src="assets/js/main.js"></script>
     <title>Login</title>
   </head>
   <body>
     <div class="name">
       <h1>Login</h1>
       <p>Please enter your information</p>
     </div>
     <div class="center">
       <form class="reg" action="login-process.php" method="post" onsubmit="">
         Email : <br>
         <input type="text" name="emaillogin" id="emaillogin"><br>
         Password : <br>
         <input type="text" name="passwordlogin" id="passwordlogin"><br>
         <input type="submit" name="login" id="login" value="submit">
       </form>
     </div>
     <div class="">
       Don't have an account?: <button type="button" onclick="location.href='register.php'">Create an account</button>
     </div>
   </body>
 </html>
