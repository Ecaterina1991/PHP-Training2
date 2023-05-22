<?php


// Numerele pe biti :
// 		- baza 16 ( 0x )

//functia dechex() => converteste un numar din baza 10 in baza 16 si returneaza un sir de caractere in baza 16

$a = 15; // F in baza 16
$rezultat = dechex($a);
echo $rezultat;//afiseaza F

		// - baza 8 ( 0 )
$octal = '37'; 
$decimal = octdec($octal); 
echo $decimal; //31
//functia octdec() converteste un numar din baza 8 in baza 10 si returneaza valoarea in baza 10.

//- baza 2 ( 0b)
//baza 2 in baza 10:

$binar = '10111';
$decimal = bindec($binar);
echo $decimal; //23


?>