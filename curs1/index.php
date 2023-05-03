<?php

// Calcularea prețului total:
// Creați o variabilă pentru prețul unui produs și o variabilă pentru numărul de produse comandate. Bazați-vă pe cantitatea comandată pentru a calcula prețul total. Dacă sunt comandate mai puțin de 10 produse, prețul este de 100 lei pe produs. Dacă sunt comandate între 10 și 50 de produse, prețul este de 90 lei pe produs. Dacă sunt comandate mai mult de 50 de produse, prețul este de 80 lei pe produs. Afișați prețul total.

$pretProdus = 100;
$numarProduse = 60;
$pretTotal = $pretProdus * $numarProduse;
$discount10 = $pretTotal * 10 / 100;
$discount20 = $pretTotal * 20 / 100;;



if ($numarProduse < 10) {
  echo $pretTotal;
}
else if ($numarProduse < 50 && $numarProduse > 10) {
  echo $pretTotal = $pretTotal - $discount10;
}
else {
  echo $pretTotal = $pretTotal - $discount20;
}

//multumesc


?>