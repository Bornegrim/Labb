<?php

require 'include/bootstrap.php';

if (isset($_POST['submit'])) {

  $post = new Post();

  $message = $_POST['post'];
  $email = $authorizer->get('Email');
  $allPosts = $post-> createPost($message, $email);
  }

header("Location: index.php");
exit();
