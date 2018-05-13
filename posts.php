<?php
include 'include/models/db.php';
include 'include/models/post.php';

$post = new Post();
$allPosts = $post-> getAllPosts();

echo '<div class="post">';
foreach ($allPosts as $post) {
  echo '<div class="post"> ';
  echo '<div class="name"> ';
  echo $post['email'] . ": ";
  echo "</div>";
  echo $post['post'];
  echo "</div>";
}
  echo '</div>';
