<?php
require_once 'connect.php';



if(isset($_POST['register'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  //verific daca mai exista alte nume la fel

  

}

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