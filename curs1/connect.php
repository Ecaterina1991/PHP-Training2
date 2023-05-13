<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);
if($mysqli -> connect_errno) {
  printf("connection failed", $mysqli-> connect_error);
  exit();
}

printf("connected successfully");
$mysqli->close();
?>
