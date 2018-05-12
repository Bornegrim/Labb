<?php
  session_start();

  if (isset($_SESSION['Email'])) {
    header('Location: index.php');
  } else if (isset($_GET['loginfail'])) {
    echo "Email or password is incorrect!";
  }

  include 'include/views/login.php';
