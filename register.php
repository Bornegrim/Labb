<?php
session_start();

if (isset($_SESSION['Email'])) {
  header('Location: index.php');
} else if (isset($_GET['registerfail'])) {
  echo "The e-mail adress is already in use";
}

include 'include/views/register.php';
