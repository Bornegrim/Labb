<?php

  require 'include/bootstrap.php';
  $session = $authorizer->sessionExist('Email');

  if ($session) {
    header('Location: index.php');
  } else if (isset($_GET['loginfail'])) {
    echo "Email or password is incorrect!";
  }

  include 'include/views/login.php';
