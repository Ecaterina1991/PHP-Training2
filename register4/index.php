<?php

require_once 'connect.php';

if(isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM registru4 WHERE username = '$username'";
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result) > 0) {
   echo "Acest nume de utilizator deja exista in baza de date!";
  }
  else {
    $query = "INSERT INTO registru4 (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    echo "Inregistrare cu succes!";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="index.php">
   <input type="text" name="username" placeholder="Numele" required>
   <input type="password" name="password" placeholder="Parola" required>
   <input type="submit" name="register" value="Inregistrare">
  </form>
</body>
</html>