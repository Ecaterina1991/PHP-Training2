<?php
require_once 'connect.php';


if(isset($_POST['register'])) {
 $username = $_POST['Nume'];
 $password = $_POST['Parola'];
//greseala am pus paranteze rotunde in loc de patrate la $_POST[]
 $query = "SELECT * FROM login WHERE Nume = '$username'";
 //greseala am pus numele din tabel/nume din form intre ghilimele simple
 $result = mysqli_query($connection, $query);

 if(mysqli_num_rows($result) > 0) {
  echo "Numele deja exista in baza de date!";
 }
 else {
  $query = "INSERT INTO login (Nume, Parola) VALUES ('$username', '$password')";
  $result = mysqli_query($connection, $query);
  echo "Inregistrare cu succes! Felicitari! Faceti parte din comunitatea noastra de elita!";
 }
}

//am inserat intre ghilimele simple in loc de duble sintaxa INSERT INTO...
//am scris din greseala $Parola in loc de $password
// iarasi nu am pus intre ghilimele simpel variabilele de la valorile pe care vreau sa le introduc in tabel 

//nu mi-am amintit sintaxa la mysqli_num_rows
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
</head>
<body>
  <form method="POST" action="index.php">
     <input type="text" name="Nume" placeholder="Numele" required>
     <input type="text" name="Parola" placeholder="Parola" required> 
     <input type="submit" name="register" value="Inregistrare">

  </form>
</body>
</html>