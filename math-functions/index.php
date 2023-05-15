<?php
//afiseaza primele 25 de numere la puterea a treia utilizand for loop in php

// for ($i=1; $i<=25; $i++) {
//   $result = pow($i, 3);
//   echo $result . "<br>";
// }

// $random_nr = 0;

// while ($random_nr != 15) {
//   $random_nr = round(rand(1,30), 2);
//   echo $random_nr . "<br>";
// }

//foloseste do-while pentru a afisa suma primelor 30 de cifre/numere

// $sum = 0;
// $i=1;

// do {
// $sum += $i;
// $i++;

// } while ($i<=30);

// echo($sum);

// Iată pașii pentru a găsi cel mai mic multiplu comun (CMMMC) al două numere:

// Identificați cea mai mare dintre cele două numere. Vom numi acest număr "a" și celălalt număr "b".
// Utilizați algoritmul Euclid pentru a găsi cel mai mare divizor comun (CMMDC) al numerelor "a" și "b". Aceasta implică împărțirea numărului mai mare la cel mai mic, apoi împărțirea restului la numărul anterior, și așa mai departe, până când se obține un rest egal cu zero. CMMDC este ultimul număr diferit de zero obținut în acest proces.
// Multiplicați cele două numere, "a" și "b".
// Împărțiți produsul obținut la CMMDC-ul calculat anterior.
// Rezultatul obținut este cel mai mic multiplu comun al celor două numere.

// De exemplu, să luăm numerele 12 și 18:

// Cel mai mare număr este 18 ("a"), iar celălalt număr este 12 ("b").
// CMMDC al numerelor 18 și 12 este 6.
// Produsul celor două numere este 18 × 12 = 216.
// Împărțim produsul la CMMDC: 216 ÷ 6 = 36.
// Cel mai mic multiplu comun al numerelor 12 și 18 este 36.
// Prin urmare, CMMMC al numerelor 12 și 18 este 36.

// $a = 12;
// $b = 18;
// $multiple = $a;

// do {
//     $multiple++;
// } while ($multiple % $a != 0 || $multiple % $b != 0);
// echo $multiple;
// 

// $start = 2;
// $diff = 3;
// $limit = 10;

// for($i = 0; $i < $limit; $i++) {
//   $number = $start + $diff * $i;
//   echo $number . "<br>";
// }

$a = 48;
$b = 36;
while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}
echo $a;

// În exemplul de cod prezentat, se folosește algoritmul lui Euclid pentru a găsi cel mai mare divizor comun (CMMDC) al numerelor $a și $b.

// Algoritmul lui Euclid se bazează pe proprietatea că cel mai mare divizor comun al două numere este același cu cel mai mare divizor comun al celui mai mic număr dintre cele două numere și diferența dintre ele.

// Explicație matematică:

// Inițializăm $a cu primul număr dat (48) și $b cu al doilea număr dat (36).
// În bucla while, se verifică dacă $b este diferit de zero. Dacă este diferit, continuăm bucla.
// În interiorul buclei, se realizează următoarele acțiuni:
// a. Se salvează valoarea lui $b într-o variabilă temporară $temp.
// b. Se atribuie lui $b restul împărțirii lui $a la $b, utilizând operatorul modulo (%). Astfel, $b devine restul împărțirii.
// c. Se atribuie lui $a valoarea lui $temp, adică valoarea anterioară a lui $b, pentru a realiza următoarea iterație a buclei cu noile valori.
// Buclele while continuă să ruleze până când $b devine zero.
// Când $b devine zero, bucla se încheie și valoarea curentă a lui $a reprezintă cel mai mare divizor comun al numerelor inițiale $a și $b.
// Se afișează rezultatul, adică valoarea lui $a.
// Explicație în programare:
// În fiecare iterație a buclei while, se realizează diviziunea lui $a la $b și se actualizează valorile lui $a și $b pentru iterația următoare. Procesul continuă până când $b devine zero. La finalul buclei, valoarea lui $a va conține cel mai mare divizor comun al numerelor inițiale $a și $b. Acest rezultat este apoi afișat folosind instrucțiunea echo.

?>