<?php

class Authorizer {

  public function __construct() {
      session_start();
  }

  public function set ($sessionName) {
    $_SESSION['Email'] = $sessionName;
  }

  public function sessionExist ($sessionName) {
    return isset($_SESSION[$sessionName]);
  }


  public function kill ($sessionName) {
    if ($this->sessionExist ($sessionName)) {
      session_unset();
      session_destroy();
    }
  }

  public function get ($sessionName) {
    if ($this->sessionExist ($sessionName)) {
        return $_SESSION[$sessionName];
    }
  }
}
