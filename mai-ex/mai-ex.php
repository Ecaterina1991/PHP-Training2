<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<!-- // Sa se progrmaeze un senzor care determina cantitatea de carburant aflata in rezervor.
//  Daca candtitatea de combustibil scade sub 10 litri sa afiseze un mesaj de avertizare cu portocaliu: "Va rog sa alimentati!“.
//  Daca cantitatea de combustibil este< 1 sa afise cu rosu mesajul:"Ati ramas fara combustibil. Trebuie sa ne oprim!“ -->

 <?php
$cantCombustibil = 9;
$atentionare1 = <<<ATENT
<p style="color: orange;">Va rog sa alimentati!</p>
ATENT;

$atentionare2 = <<<ATENT2
<p style="color: red;">Ati ramas fara combustibil. Trebuie sa ne oprim!</p>
ATENT2;

if ($cantCombustibil < 10 && $cantCombustibil > 1) {
     echo $atentionare1;
}

if ($cantCombustibil < 1) {
  echo $atentionare2;
 } 
 

 ?> 


</body>
</html>