<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "user_db2";

$connection = mysqli_connect($host, $username, $password, $database);



if(mysqli_connect_errno()) {
  die ("conexiune esuata" . mysqli_connect_error());
}




//in crearea tabelului am gresit sintaxa lui PRIMARY KEY. initial l-am trecut cu liniuta.
?>