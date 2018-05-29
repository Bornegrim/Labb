<?php

  $session = $authorizer->sessionExist('Email');

  if (!$session) {
    header('Location: login.php');
    exit();
  }

  include 'include/views/posts.php';
  include 'include/views/_posts-list.php';
  include 'include/views/_posts-new.php';
  exit();
