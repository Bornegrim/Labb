<?php
session_start();

if (!isset($_SESSION['Email'])) {
  header('Location: login.php');
}
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
    <meta charset="utf-8">
      <title >Message Board</title>
  </head>
  <body>
    <?php include 'posts.php' ?>
    <div>
    <h1 class="center">Message board</h1>
    <p class="center">Welcome to the best message board!</p>
  </div>
  <div>
    <form class="center" name="form" action="posts-create.php" method="post" onsubmit="return checkPost();">
      Message : <br>
      <textarea rows="10" cols="64" class="message" type="text" id ="post" name="post"> </textarea><br>
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
