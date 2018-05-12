<?php
include 'include/models/db.php';
include 'include/models/post.php';

$post = new Post();
$allPosts = $post-> getAllPosts();

echo '<div class="center">';
foreach ($allPosts as $data) {
  echo '<div class="center"> ';
  echo $data['email'] . ":";
  echo "</div>";
  echo '<div class="center">';
  echo $data['post'];
  echo "</div>";
}
  echo '</div>';

  
