
<?php
$arr = array("Alexandra"=>"cursant avansat phpacademy", "Sorin"=>"cursant avansat phpacademy", "Hora"=>"cursant intermediar phpacademy", "Ecaterina"=>"cursant intermediar phpacademy", "Nicoleta"=>"cursant incepator phpacademy");

array_walk($arr, 'arrFunc', ' este un cursant cu inalte aptitudini antrenat intr-un curs intensiv si profesionist de programare si in cadrul capitolului Basic PHP detine statutul de ');

function arrFunc($value, $key, $p) {
	echo $key.$p.$value."<br>"."<br>";
} 

 ?>