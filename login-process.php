<?php

include 'include/models/authorizer.php';
$authorizer = new Authorizer();

if (isset($_POST['login'])) {

  include 'include/models/db.php';
  include 'include/models/user.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = new User();
  $login = $user->login($email, $password);

  if ($login) {
    $authorizer->set($email);
    header("Location: index.php");
    } else {
      header("Location: login.php?loginfail=1");
      exit();
      }
    } else {
  header("Location: ../login.php");
  exit();
}
