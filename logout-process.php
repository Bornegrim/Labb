<?php

include 'include/models/authorizer.php';

$authorizer = new Authorizer();
$destroy = $authorizer-> kill('Email');

header("Location: login.php");
exit();
