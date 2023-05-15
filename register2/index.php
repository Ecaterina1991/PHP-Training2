<?php
require_once 'connect.php';



if(isset($_POST['register'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  //verific daca mai exista alte nume la fel

  $query = "SELECT * FROM  users WHERE username = '$username'";
  //greseala nu am plasat intre ghilimele simple $username
  $result = mysqli_query($connection, $query);

  if(mysqli_num_rows($result) > 0) {
   echo "Numele de utilizator exista"; 
  }
   else {
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    echo "Inregistrare reusita!";
  }
}
 //greseala am scris mysql_num_rows in loc de mysqli_num_rows
  // creare utilizator nou
  //greseala nu am plasat intre ghilimele simple $username si $password
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formular inregistrare</title>
</head>
<body>

<form method="POST" action="index.php">
  <input type="text" name="username" placeholder="Numele dumneavoastra" required>
  <input type="password" name="password" placeholder="Parola" required>
  <input type="submit" name="register" value="Inregistrare">
</form>
  
</body>
</html>