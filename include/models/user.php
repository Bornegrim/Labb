<?php

class User extends Db {

  private function test_email($data) {
    $atpos = strpos($data, "@");
    $dotpos = strripos($data, ".");
    if ($atpos === false || $dotpos === false) {
      return false;
    } else {
        if ($atpos<1 || $dotpos<($atpos+2) || $dotpos+2>=strlen($data)) {
          return false;
        } else {
          return true;
      }
    }
  }

  public function login($email, $password) {

    $db = new Db();

    $emaillogin = $db->escape($email);
    $passwordlogin = $db->escape($password);

    if ($this->test_email($emaillogin)) {

        $result = $db->getUser($emaillogin);

        if (mysqli_num_rows($result) == 1) {
          $userdata = mysqli_fetch_array($result);
          $salt = $userdata['Salt'];
          $hashedpass = $userdata['Password'];
          $inputpasswordhashed = md5($passwordlogin .= $salt);
        }
        return ($hashedpass === $inputpasswordhashed);
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

    $emailreg = $db->escape(trim($email));
    $passwordreg = $db->escape(trim($password));

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

    } else {
      header("Location: register.php");
      exit();
    }
    }
  }
}
