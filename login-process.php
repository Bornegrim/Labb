<?php

require 'include/bootstrap.php';

if (isset($_SERVER['HTTP_REFERER'])) {

  $session = $authorizer->sessionExist('Email');

  if ($session) {
    header('Location: index.php');
    exit();
  }

  if (isset($_POST['login'])) {

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
      }
      exit();
    }
