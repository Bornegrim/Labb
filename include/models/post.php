<?php
  class Post extends DB {

    public function getAllPosts() {

      $db = new Db();
      $conn = $db->connect();

      $sql = "SELECT email, post FROM posts ORDER BY id ASC";
      $result = mysqli_query($conn, $sql);
      $numRows = mysqli_num_rows($result);

      if ($numRows > 0) {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
    }

    public function createPost($message) {

      $db = new Db();
      $conn = $db->connect();
      $email = $_SESSION['Email'];
      $post = mysqli_real_escape_string($conn, $message);


      if (!Empty($post)) {
        $sql = "INSERT INTO posts(post, email)VALUES('$post', '$email')";
        mysqli_query($conn, $sql);
      }
    }
  }
