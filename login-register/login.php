<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "user_db";

//conectare la serverul mysql
$connection = mysqli_connect($host, $username, $password, $database);

//verificare erori de conectare

if (mysqli_connect_errno()) {
  die("Conexiune esuata: " . mysqli_connect_error());
}
//mysqli_connect_errno() este o functie si daca returneaza zero, inseamna ca nu s-au produs erori si codul nu va fi executat
//mysqli_connect_error() returneaza descrierea textuala a erorii care s-a produs
//die - opreste executia scriptului
?>