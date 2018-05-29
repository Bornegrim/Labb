<?php

require 'include/bootstrap.php';

if (isset($_SERVER['HTTP_REFERER'])) {

  if (isset($_POST['reg'])) {

    $email = $_POST['emailreg'];
    $password = $_POST['passwordreg'];

    $user = new User();
    $register = $user->register($email, $password);

    header("Location: login.php");
    exit();
  }

}
