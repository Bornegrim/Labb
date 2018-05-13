<?php

require 'include/bootstrap.php';

$session = $authorizer->sessionExist('Email');

if (!$session) {
  header('Location: login.php');
  exit();
} else {
  include 'include/views/_header.php';
  include 'posts.php';
  include 'include/views/_footer.php';
}
