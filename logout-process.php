<?php

include 'include/bootstrap.php';
$destroy = $authorizer-> kill('Email');

header("Location: login.php");
exit();
