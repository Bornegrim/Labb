<?php
include 'include/models/db.php';
include 'include/models/post.php';

$post = new Post();
$allPosts = $post-> getAllPosts();

echo '<div class="center">';
while ($record = mysqli_fetch_array(($allPosts))) {
  echo '<div class="center"> ';
  echo $record['email'] . ":";
  echo "</div>";
  echo '<div class="center">';
  echo $record['post'];
  echo "</div>";
}
echo '</div>';
 ?>
