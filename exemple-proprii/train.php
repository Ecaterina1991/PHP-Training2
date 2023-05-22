<?php


// Numerele pe biti :
// 		- baza 16 ( 0x )

//functia dechex() => converteste un numar din baza 10 in baza 16 si returneaza un sir de caractere in baza 16

$a = 15; // F in baza 16
$rezultat = dechex($a);
//echo $rezultat;//afiseaza F

		// - baza 8 ( 0 )
$octal = '37'; 
$decimal = octdec($octal); 
//echo $decimal; //31
//functia octdec() converteste un numar din baza 8 in baza 10 si returneaza valoarea in baza 10.

//- baza 2 ( 0b)
//baza 2 in baza 10:

$binar = '10111';
$decimal = bindec($binar);
//echo $decimal; //23




//octdec - Numerele din sistemul octal în programare sunt reprezentări ale valorilor numerice utilizând baza 8. În acest sistem, cifrele valide sunt de la 0 până la 7.

$dec2 = 25;
$oct = decoct($octal);
//echo $oct; //31

// Pentru exemplu, să convertim numărul 25 în sistemul octal:

// 25 împărțit la 8 dă un rezultat de 3 și un rest de 1. Prima cifră în sistemul octal este 1.
// 3 împărțit la 8 dă un rezultat de 0 și un rest de 3. A doua cifră în sistemul octal este 3.

$oct2 = 40;
$dec3 = octdec($oct2);
//echo $dec3;//32

//4*(8**1)   +   0*(8**0) = 32+0




$hex = 564564643;
$dec89 = hexdec($hex);
//echo $dec89; //1379

/*
Această valoare este convertită în valoarea echivalentă în sistemul decimal, utilizând următoarea expresie matematică:
Se iau cifrele din valoarea hexazecimală, de la dreapta la stânga.
Fiecare cifră este înmulțită cu 16 ridicat la puterea corespunzătoare.
Pentru cifrele A, B, C, D, E și F, acestea reprezintă valorile 10, 11, 12, 13, 14 și 15, respectiv.
Rezultatele obținute sunt adunate pentru a obține valoarea în sistemul decimal.
Pentru exemplul dat, să convertim numărul hexazecimal 563 în sistemul decimal:

Ultima cifră este 3, care reprezintă valoarea 3 în sistemul decimal.
Cifra din mijloc este 6, care reprezintă valoarea 6 în sistemul decimal.
Prima cifră este 5, care reprezintă valoarea 5 în sistemul decimal.
Pentru a obține valoarea în sistemul decimal, înmulțim fiecare cifră cu 16 ridicat la puterea corespunzătoare:

3 x 16^0 = 3 x 1 = 3
6 x 16^1 = 6 x 16 = 96
5 x 16^2 = 5 x 256 = 1280
Adunăm aceste rezultate parțiale: 3 + 96 + 1280 = 1379.

Astfel, numărul hexazecimal "563" este convertit în numărul zecimal "1379".

*/



//decimal in hexazecimal(16)
//0-9 -- ulterior A-F reprezinta 10-15 
// Numărul hexazecimal în programare este o reprezentare a valorilor numerice folosind baza 16, care constă din cifrele de la 0 la 9 și literele A până la F.

$dec = 100565;
$hex = dechex($dec);
//echo $hex; //188d5


  // 100 împărțit la 16 dă un rezultat de 6 și un rest de 4. Deci, prima cifră în sistemul hexazecimal este 4.
  // 6 împărțit la 16 dă un rezultat de 0 și un rest de 6. Așadar, a doua cifră în sistemul hexazecimal este 6.
  // Rezultatul final este "64", reprezentând valoarea 100 în sistemul hexazecimal.





  //bindec - Numărul binar în programare este o reprezentare a valorilor numerice folosind baza 2, constând din cifrele 0 și 1.

  $binarul = 1101110;
  $dec5 = bindec($binarul);
  //echo $dec5; //110

//   Numărul binar dat este 1101110.
// Începând cu cifra cea mai din dreapta, înmulțim fiecare cifră cu puterile corespunzătoare ale lui 2.
// Cifra "0" de pe poziția 0 (cea mai din dreapta) nu contribuie cu nimic la valoarea finală.
// Cifra "1" de pe poziția 1 contribuie cu valoarea 1 x 2^1 = 2.
// Cifra "1" de pe poziția 2 contribuie cu valoarea 1 x 2^2 = 4.
// Cifra "1" de pe poziția 3 contribuie cu valoarea 1 x 2^3 = 8.
// Cifra "0" de pe poziția 4 nu contribuie cu nimic la valoarea finală.
// Cifra "1" de pe poziția 5 contribuie cu valoarea 1 x 2^5 = 32.
// Cifra "1" de pe poziția 6 contribuie cu valoarea 1 x 2^6 = 64.
// Adunăm rezultatele parțiale pentru a obține valoarea finală în sistemul zecimal: 0 + 2 + 4 + 8 + 0 + 32 + 64 = 110.
// Astfel, numărul binar "1101110" este convertit în numărul zecimal "110".

$dec56 = 56;
$binar23 = decbin($dec56);
//echo $binar23; //111000

// Pentru exemplu, să convertim numărul 56 în sistemul binar:
// 56 împărțit la 2 dă un rezultat de 28 și un rest de 0. Prima cifră în sistemul binar este 0.
// 28 împărțit la 2 dă un rezultat de 14 și un rest de 0. A doua cifră în sistemul binar este 0.
// 14 împărțit la 2 dă un rezultat de 7 și un rest de 0. A treia cifră în sistemul binar este 0.
// 7 împărțit la 2 dă un rezultat de 3 și un rest de 1. A patra cifră în sistemul binar este 1.
// 3 împărțit la 2 dă un rezultat de 1 și un rest de 1. A cincea cifră în sistemul binar este 1.
// 1 împărțit la 2 dă un rezultat de 0 și un rest de 1. A șasea cifră în sistemul binar este 1.
// Rezultatul final este "111000", reprezentând valoarea 56 în sistemul binar.
//proprietatea fundamentala a numerelor pare. cand impartim un numar la 2 obtinem intotdeauna un rest de zero sau 1.\


//dec - binar - impartim infinit la doi - restul formeaza binarul de la dreapta la stanga
//dec - hexazecimal - impartim la 16... restul formeaza hexadecimalul
//dec - octal - impartim la 8 - restul formeaza decimalul de la dreapta la stanga

//Exercițiul 1: Conversie din baza 2 în baza 10

// $binaryNumber = "10101011110000";
// $decimalNumber = 0;
// $power = 0;

// for ($i = strlen($binaryNumber) - 1; $i >= 0; $i--) {
//     $decimalNumber += intval($binaryNumber[$i]) * (2 ** $power);
//     $power++;
// }

// echo $decimalNumber;  // Output: 42

//conv b8 - b10

// $octalNumber = "72";
// $decimalNumber = 0;
// $power = 0;

// for ($i = strlen($octalNumber) - 1; $i >= 0; $i--) {
//     $decimalNumber += intval($octalNumber[$i]) * (8 ** $power);
//     $power++;
// }

// echo $decimalNumber;  // Output: 58

//Exercițiul 3: Conversie din baza 16 în baza 10

// $hexadecimalNumber = "2A";
// $decimalNumber = 0;
// $power = 0;
// $hexValues = [
//     '0' => 0, '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7, '8' => 8, '9' => 9,
//     'A' => 10, 'B' => 11, 'C' => 12, 'D' => 13, 'E' => 14, 'F' => 15
// ];

// for ($i = strlen($hexadecimalNumber) - 1; $i >= 0; $i--) {
//     $decimalNumber += $hexValues[strtoupper($hexadecimalNumber[$i])] * (16 ** $power);
//     $power++;
// }

// echo $decimalNumber;  // Output: 42

//Exercițiul: Conversie din baza 10 în baza 16

$decimalNumber = 305;
$hexadecimalNumber = '';

while ($decimalNumber > 0) {
    $remainder = $decimalNumber % 16;
    $hexadecimalNumber = dechex($remainder) . $hexadecimalNumber;
    $decimalNumber = intdiv($decimalNumber, 16);
}

echo $hexadecimalNumber;  // Output: 131



?>