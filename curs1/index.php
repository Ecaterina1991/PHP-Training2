<?php

$password = "test123";
$old_password = "test";
$user_input = "test123";

if($user_input == $password) {
  echo "Welcome";
}
elseif($user_input== $old_password) {
  echo "This is your old password, you have a new one";}
  else {
    echo "Wrong password";
  }
?>