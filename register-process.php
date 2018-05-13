<?php

  if (isset($_POST['reg'])) {
    
    include 'include/bootstrap.php';

    $email = $_POST['emailreg'];
    $password = $_POST['passwordreg'];

    $user = new User();
    $user->register($email, $password);

    header("Location: login.php");
    exit();
  } else {
    header("Location: ../register.php");
    exit();
  }


 ?>
