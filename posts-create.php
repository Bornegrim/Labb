<?php

session_start();
include 'include/models/db.php';
include 'include/models/post.php';

if (isset($_POST['submit'])) {

  $message = $_POST['post'];

  $post = new Post();
  $allPosts = $post-> createPost($message);
  }

header("Location: index.php");
exit();
