<?php $post = new Post();
$allPosts = $post-> getAllPosts();
if (count($allPosts) > 0) {
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
}
