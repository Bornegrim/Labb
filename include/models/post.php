<?php
  class Post extends DB {

    public function getAllPosts() {

      $db = new Db();
      $posts = $db->getPosts();

      $numRows = mysqli_num_rows($posts);

      if ($numRows > 0) {
        while ($row = mysqli_fetch_assoc($posts)) {
          $data[] = $row;
        }
        return $data;
      }
    }

    protected function getUserID($email) {
      $db = new Db();
      $result = $db->getUserID($email);
      $row = mysqli_fetch_assoc($result);

      return $row['UserID'];
    }

    public function createPost($message, $email) {

      $db = new Db();
      $userID = $this->getUserID($email);
      $post = $db->escape(trim($message));


      if (!Empty($post) && !($post == " ")) {
        $db->setPosts($message, $userID);
      }
    }
  }
