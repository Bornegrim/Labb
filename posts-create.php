<?php

include 'include/models/db.php';
include 'include/models/post.php';
include 'include/models/authorizer.php';

if (isset($_POST['submit'])) {


  $post = new Post();
  $authorizer = new Authorizer();

  $message = $_POST['post'];
  $email = $authorizer->get('Email');
  $allPosts = $post-> createPost($message, $email);
  }

header("Location: index.php");
exit();
