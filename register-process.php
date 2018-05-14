<?php

  if (isset($_POST['reg'])) {

    require 'include/bootstrap.php';

    $email = $_POST['emailreg'];
    $password = $_POST['passwordreg'];

    $user = new User();
    $register = $user->register($email, $password);
    
    header("Location: login.php");
    exit();
  } else {
    header("Location: ../register.php");
    exit();
  }


 ?>
