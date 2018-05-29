<?php
class Db {

  private $uname;
  private $pass;
  private $host;
  private $dbname;

  protected function connect() {
    $this->host = "n3plcpnl0118.prod.ams3.secureserver.net";
    $this->uname = "Bornelu";
    $this->pass = "Gitgud@@@123";
    $this->dbname = "Bornegrim_Labb";

    $conn = new mysqli($this->host, $this->uname, $this->pass, $this->dbname);
    return $conn;
  }

  protected function escape($var) {
    $result = mysqli_real_escape_string($this->connect(), $var);
    return $result;
}

  protected function getPosts() {
    $sql = "SELECT email, post FROM posts JOIN User ON posts.UserID=User.UserID ORDER BY id ASC";
    $result = mysqli_query($this->connect(), $sql);
    return $result;
  }

  protected function setPosts($post, $userID) {
    $sql = "INSERT INTO posts(post, UserID)VALUES('$post', '$userID')";
    mysqli_query($this->connect(), $sql);
  }

  protected function getUser($email) {
    $sql = "SELECT Email, Password, Salt FROM User WHERE Email = '$email'";
    $result = mysqli_query($this->connect(), $sql);
    return $result;
  }

  protected function getUserID($email) {
    $sql = "SELECT UserID FROM User WHERE Email = '$email'";
    $result = mysqli_query($this->connect(), $sql);
    return $result;
  }

  protected function regUser ($email, $pass, $salt) {
    $sql = "INSERT INTO User(Email, Password, Salt)VALUES('$email', '$pass', '$salt')";
    mysqli_query($this->connect(), $sql);
  }

  protected function getEmail ($email) {
    $sql = "SELECT Email FROM User WHERE Email = '$email'";
    $result = mysqli_query($this->connect(), $sql);
    return $result;
  }
}
