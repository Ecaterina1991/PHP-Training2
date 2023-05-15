

// $stoc = ["oreo"];
 //$stoc = [""];
// $string = "Produsul se afla in magazin";

// if(in_array("oreo", $stoc)) {
//   echo "b) " . $string;
// }
// else {
//   echo "a) " . str_replace("se afla", "nu mai se afla", $string);

// }

<?php

$nr_1 = 20;
$nr_2 = 30;

if ($nr_1 > $nr_2 || $nr_2 > $nr_1 && isset($nr_1) && isset($nr_2)) {
  echo "Variabile inegale:" . "<br>";
  if($nr_1 > $nr_2) {
    echo "primul numar este mai mare.";
  } else if ($nr_1 < $nr_2) {
    echo "al doilea numar este mai mare.";
  }
}
else if($nr_1 === $nr_2 && isset($nr_1) && isset($nr_2)) {
  echo "Ambele variabile sunt egale.";
}
else {
    echo "Eroare! Va rog sa introduceti doua valori numerice valide!";
}

?>
