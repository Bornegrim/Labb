<?php

class User extends Db {

  public function login($email, $password) {

    $db = new Db();
    $conn = $db->connect();

    $emaillogin = mysqli_real_escape_string($conn, $email);
    $passwordlogin = mysqli_real_escape_string($conn, $password);

    $result = $db->getUser($emaillogin);

    if (mysqli_num_rows($result) == 1) {
      $userdata = mysqli_fetch_array($result);
      $salt = $userdata['Salt'];
      $hashedpass = $userdata['Password'];
      $inputpasswordhashed = md5($passwordlogin .= $salt);
    }

    return ($hashedpass === $inputpasswordhashed);
  }

  private function test_email($data) {
    $atpos = strpos($data, "@");
    $dotpos = strripos($data, ".");
    if ($atpos === false || $dotpos === false) {
      return false;
    } else {
        if ($atpos<1 || $dotpos<($atpos+2) || $dotpos+2>=($data.length)) {
          return true;
        } else {
          return false;
      }
    }
  }


  private function salt($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $salt = '';
      for ($i = 0; $i < $length; $i++) {
          $salt .= $characters[rand(0, $charactersLength - 1)];
      }
      return $salt;
  }

  public function register($email, $password) {

    $db = new Db();
    $conn = $db->connect();

    $emailreg = mysqli_real_escape_string($conn, trim($email));
    $passwordreg = mysqli_real_escape_string($conn, trim($password));

    $result = $db->getEmail($emailreg);

    if (mysqli_num_rows($result) > 0) {
      header("Location: register.php?registerfail=1");
      exit();
  } else {

    if (!($this->test_email($emailreg))) {
          $emailreg = "";
      }

    if (!Empty($emailreg) && (!Empty($passwordreg) && !($passwordreg === " "))) {
      $salt = $this->salt();
      $passwordsalted = ($passwordreg .= $salt);
      $passwordhashed = md5($passwordsalted);
      $db->regUser($emailreg, $passwordhashed, $salt);
      }
    }
  }
}
