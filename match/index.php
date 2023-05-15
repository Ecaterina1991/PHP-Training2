<?php

// Exercițiul 1: Calculatoare de buzunar
// Să presupunem că vrei să implementezi o funcționalitate simplă pentru calculatoare de buzunar. Ai o variabilă $operator care reprezintă operatorul matematic ("+", "-", "*", "/") și două variabile $operand1 și $operand2 care reprezintă numerele pe care vrei să le calculezi. Utilizează funcția match pentru a evalua operatorul și a returna rezultatul corespunzător.

// $operand1 = 7;
// $operand2 = 5;
// $operator = "+";

// $result = match($operator) {
//   "-" => "$operand1 - $operand2",
//   "+" => "$operand1 + $operand2",
//   "*" => "$operand1 * $operand2",
//   "/" => "$operand1 / $operand2",
//   default => "Va rog sa introduceti un operator valid ca valoare",

// };

// echo $result;

//greseala: nu am pus punct si virgula dupa inchiderea acoladei

// Exercițiul 2: Evaluarea temperaturilor
// Presupunem că ai o variabilă $temperature care reprezintă o temperatură în grade Celsius și vrei să o convertești în grade Fahrenheit sau Kelvin. Utilizează funcția match pentru a evalua temperatura și a returna conversia corespunzătoare.

$temperature = 19;
$kelvin = $temperature + 273.15;
//expresie matematice transformare: Kelvin = Celsius + 273.15

$result = match($temperature) {
  20 => "Temperatura de $temperature grade Celsius reprezinta $kelvin Kelvin",
  21 => "Temperatura de $temperature grade Celsius reprezinta $kelvin Kelvin",
  22 => "Temperatura de $temperature grade Celsius reprezinta $kelvin Kelvin",
  23 => "Temperatura de $temperature grade Celsius reprezinta $kelvin Kelvin",
  24 => "Temperatura de $temperature grade Celsius reprezinta $kelvin Kelvin",
  default => "Introduceti o temperatura intre 20 si 21 grade celsius",

};

echo $result;

?>