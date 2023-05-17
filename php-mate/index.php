<?php
// Exercițiu simplu:
// Scrieți o buclă care afișează toate numerele de la 1 la 10 și pentru fiecare număr, afișați valoarea sa absolută utilizând funcția abs().


// for($i=1; $i<=10; $i++) {
//   echo abs($i) . "<br>";
// }

// Exercițiu mediu:
//Scrieți o buclă care afișează primele 20 de numere întregi și pentru fiecare număr, afișați rădăcina sa pătrată utilizând funcția sqrt().

// for($i=1; $i<=20; $i++) {
//   echo round(sqrt($i), 2) . "<br>";
// }

// Exercițiu mediu:
// Generați 10 numere aleatoare între -50 și 50 utilizând funcția rand(). Afișați aceste numere și pentru fiecare număr, determinați dacă este pozitiv, negativ sau zero utilizând o structură de control (if-else).

//1. generez 10 numere aleatorii intre -50 si 50

// for($i=1; $i<=10; $i++) {
//   $result = rand(-50, 50);  
//   echo $result;

// if($result > 0) {
//   echo " este un numar pozitiv"."<br>";
// }
// else if ($result < 0) {
//   echo " este un numar negativ"."<br>";
// }
// else {
//   echo " numarul este egal cu zero"."<br>";
// }
// }

//multumesc


// Exercițiu mediu:
// Scrieți o buclă care afișează toate numerele pare de la 1 la 50 și pentru fiecare număr, afișați rezultatul funcției round() aplicată asupra valorii respective.

// for ($i=2; $i<=50; $i+=2) {
//   echo round($i)."<br>";
// }

// Exercițiu mediu:
// Generați 5 numere aleatoare între 1 și 100 utilizând funcția rand(). Afișați aceste numere și determinați suma lor utilizând o buclă și o variabilă auxiliară.


// $sum=0;
// for ($i=1; $i<=5; $i++) {
// $nr_random = rand(1, 100);
// echo $nr_random."<br>";
// $sum = $sum + $nr_random;
// }
// echo $sum;

//multumesc


// Exercițiu mediu:
// Scrieți o buclă care afișează primele 10 numere Fibonacci și pentru fiecare număr, afișați partea întreagă a rezultatului funcției sqrt() aplicată asupra valorii respective.

// $nr_prec = 0;
// $nr_curent = 1;

// for ($i=0; $i<10; $i++) {
// $nr_urm = $nr_prec + $nr_curent;
// echo $nr_urm."-".(int)sqrt($nr_urm)."<br>";

// $nr_prec = $nr_curent;
// $nr_curent = $nr_urm;
// }

//multumesc



// ???Exercițiu mediu:
// Generați un număr aleatoriu între 1 și 100 utilizând funcția rand(). Apoi, scrieți o buclă care să determine cel mai mic multiplu comun (CMMD) dintre acel număr generat și toate numerele de la 1 la 10 utilizând funcția min().


// ???Exercițiu mediu:
// Scrieți o buclă care afișează toate numerele de la 1 la 100 și pentru fiecare număr, verificați dacă acesta este prim utilizând o structură de control (if-else) și funcția sqrt().

// var_dump($_GET);

// $x = $_GET['x'];
// $y = $_GET['y'];

// $result = $x + $y;
// echo "Rezultatul este: ". $result;


// + un mic exercitiu pentru voi : Se consideră o succesiune de caractere de '1' şi '0' din care primul caracter
// este '1'. Această secvenţă este reprezentarea în baza 2 a unui număr
// natural. Să se afişeze acest numărul în baza 10.

//reprezentarea in sistemul binar (baza 2)
//1***
//1****

//* poate fi 1 sau 0;



// Date de intrare:
// 1111
// 11111
// Date de iesire
// 15
// 31

//"1****" avem un string cu 5 caractere



/*

$binar = '10111';
$decimal = bindec($binar);
echo $decimal; //23


Cifra din dreapta este 1, deci se calculează 1 * 2^0 = 1.
Se trece la cifra următoare la stânga, care este tot 1, și se calculează 1 * 2^1 = 2.
Se trece la următoarea cifră la stânga, care este 1, și se calculează 1 * 2^2 = 4.
Se trece la următoarea cifră la stânga, care este 0, deci se calculează 0 * 2^3 = 0.
Se trece la ultima cifră la stânga, care este 1, și se calculează 1 * 2^4 = 16.


Se adună produsele obținute la fiecare pas: 1 + 2 + 4 + 0 + 16 = 23.
Astfel, numărul binar 10111 este echivalent cu numărul zecimal 23. Aceasta este operația pe care o realizează funcția bindec() în PHP, în mod automat și implicit, atunci când primește un șir de caractere reprezentând un număr binar.

functia bindec(11111)

count($secret_nr)<32;

1111 = (1 × 2³) + (1 × 2²) + (1 × 2¹) + (1 × 2⁰) = 15

trebuie sa se faca abstractie de prima cifra care intotdeauna este 1 
si celelalte cifre pot fi pana la 31. 
in fiecare dintre expresii difera  exponentul si el ar fi de la zero la 31 de la dreapta la stanga + fiecarei expresii ii corespunde cate o variabila care poate fi 0 sau 1 dar aceste variabile sunt independente una de cealalta. nu li se poate aplica aceesi regula. nu pot fi definite printr-o singura variabila. dar poate putem face diferenta prin index daca le incadram in array.
putem avea maxim 32 expresii matematice. 
putem avea minim 2 expresii matematice

*/
// $x = rand(0,1);
//


// $secret_nr = (1 * pow(2,3)) + ($x * pow(2,2)) + ($x * pow(2,1)) + ($x * pow(2,0));
// echo $secret_nr;



// $secret_nr = (1 * pow(2,3)) + ($x * pow(2,2)) + ($y * pow(2,1)) + ($z * pow(2,0));
// echo $secret_nr;




//Folosind continue si o structura repetitive sa se afiseze doar
//numerele impare pana la 15.

// for ($i=0; $i<=15; $i++) {
//   if($i%2 == 0) {
//     continue; 
    
//   }
// echo $i.",";
// }


//afisati cu ternary operator daca un numar este par sau impar si in cazul a doua numere diferite sa se compare si sa se afiseze care este mai mare ca valoare

//$x = 2;

//$result = ($x%2==0) ? "par" : "impar";
//echo $result;



//$result = ($a>$b) ? "$a max" : "$b max";
//echo $result;

// $numar = 10;

// $referinta = &$numar; //10

// $numar=50;

// echo $numar."<br>";
// echo $referinta;


// Programul ce afiseaza un calificativ in functie de nota unui student. Nota va fi setata in variabila $nota. 1-4 insuficient;5-6 suficient;
// 7 – 8 bun; 9-10 burisier;


// $nota = rand(1,10);

// switch ($nota) {
//   case 1: 
//   case 2: 
//   case 3: 
//   case 4: 
//     echo "insuficient";
//     break;
//   case 5: 
//   case 6: 
//     echo "suficient";
//     break;
//   case 7: 
//   case 8: 
//     echo "bun";
//     break;
//   case 9: 
//   case 10: 
//     echo "bursier";
//     break;
//     default: 
//     echo "nota introdusa trebuie sa fie intre 1 si 10";
//     break;
// }





// Se citesc varsta ($v), inaltimea($i)si sexul($s) unei persoane.
//     Sa se calculeze greutatea($g) ideala, dupa formula :
// $g =50+0.75*($i-150)+($v-20)/4,   pentru baieti
// $g = $g *0.9,                     pentru fete

// $v = rand(5,18);
// $i = rand(80, 120);
// $g = rand(23, 50);
// $s = rand(1,2);
// $g = 50 + 0.75*($i-150)+($v-20)/4;

// if($s==1) {
// echo "Pentru Baieti, de inaltime $i, varsta $v, greutatea ideala este $g";
// }
// else {
//   $g = $g * 0.9;
//   echo "Pentru fete de inaltime $i, varsta $v, greutatea ideala este $g";
// }

// Intr-un parc se joaca 3 copii care au greutatile a,b,c. Sa se stabileasca
//      daca se pot aseza pe un balansoar astfel incat acesta sa stea in echilibru.

//
$y = rand(2,32);// => $x = rand(0,1);

$sum = 0;



for ($i=rand(1,31); $i>0; $i--) {
   $expr = $x * pow(2, $i);
   $sum = $expr + $sum;
   
}
 $nr_dec = $sum + (1 * pow(2, ($i+1)));
 //echo $nr_dec;
 


//$secret_nr = (1 * pow(2,3)) + ($x * pow(2,2)) + ($x * pow(2,1)) + ($x * pow(2,0));
?>