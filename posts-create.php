<?php
session_start();

$uname = "Bornelu";
$pass = "Gitgud@@@123";
$host = "n3plcpnl0118.prod.ams3.secureserver.net";
$dbname = "Bornegrim_Labb";
$tbl_name = "posts";

$connection = new mysqli($host, $uname, $pass, $dbname);

$post = "";

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if (isset($_POST['submit'])) {

  $email = $_SESSION['Email'];

  if (!Empty($_POST['post'])) {
    $post = test_input(mysqli_real_escape_string($connection,$_POST['post']));
  }

  if (!Empty($post)) {
    $query = "INSERT INTO $tbl_name(post, email)VALUES('$post', '$email')";
    $result = mysqli_query($connection, $query);
  }

  }

header("Location: index.php");
exit();

?>
