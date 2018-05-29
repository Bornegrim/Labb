<?php

require 'include/bootstrap.php';
if (isset($_SERVER['HTTP_REFERER'])) {

  $session = $authorizer->sessionExist('Email');

  if (!$session) {
    header('Location: login.php');
    exit();
  }

    $post = new Post();

    $message = $_POST['message'];
    $email = $authorizer->get('Email');
    $post->createPost($message, $email);

  exit();
}
