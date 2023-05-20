<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <?php $a = 11;?>

<?php if($a==10) { ?>
  <p style=color:green;>a este 10 sigur dupa ora zece</p>
 
<?php } else { ?>
  <p style=font-size:22px;color:orange;> a trebuie sa fie altceva!</p>
 
  <?php } ?>
</body>
</html> -->

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

// $sum = 0;
// $i_init = rand(2,31);
// echo "Puterea exponentiala introdusa in ecuatie pentru a genera numarul binar: ".$i_init."<br>";

// for ($i=$i_init; $i>0; $i--) {
// $y = rand(2,32);// => $x = rand(0,1);
// $x = rand(0,1);
// while(1) {
//    $x=str_replace($y, $x, $x);
//    //echo($x);
//    break;
// }
//    $expr = $x * pow(2, $i);
//    $sum = $expr + $sum;
//    echo $sum."<br>";
// }
//  $nr_bin = $sum + (1 * pow(2, ($i_init+1)));
//  echo "Numarul reprezentat in baza 10: ".$nr_bin;

//1111 = (1 × 2³) + (1 × 2²) + (1 × 2¹) + (1 × 2⁰) = 15


// $sum = 0;
// $i_init = rand(0,32);
// echo "Puterea exponentiala introdusa in ecuatie pentru a genera numarul binar: ".$i_init."<br>";

// for ($i=$i_init; $i>0; $i--) {
//   //generare numar random 0 sau 1 pentru completarea numarului binar/////////////////
// $y = rand(2,32);// => $x = rand(0,1);
// $x = rand(0,1);
// echo $x."<br>";
// while(1) {
//    $x=str_replace($y, $x, $x);
//    //echo($x);
//    break;
// }
// /////////////////////////////////////////////////////

// $expr = $x * pow(2, $i);
// //echo $expr;
//  $sum = $expr + $sum;
// //echo $sum."<br>";
// $sum_final = $sum;
// global $sum_final;
// echo $sum_final."<br>";
// }


//  $nr_bin = $sum_final + (1 * pow(2, ($i_init+1)));
//  echo "Numarul reprezentat in baza 10: ".$nr_bin;

// $x = "100.52";
// //var_dump(is_numeric($x));

// $cast = (intval($x));
// var_dump($cast);

// $arr = [4, 9, 12.2548, 36, 5, -5];
// $abs = abs(min($arr));
// //echo $abs;
// $sqrt = sqrt($arr[0]);
// //echo $sqrt;

// $round = round($arr[2], 2);
// echo $round;

//define("WELLCOME", "Bine ati venit pe acest site!");
// //echo WELLCOME;

// define("REPEAT", "Bine ati venit pe acest site din nou!");
// echo REPEAT;

// define("CARTI", ["Jurnalul Virginiei Woolf", "Punct-Contrapunct de Aldous Huxley", "TU de Matei Calinescu"]);

// //echo CARTI[1];

// function verificActualitate() {
//   echo CARTI[0];
// }

// verificActualitate();


//$x = 10;
//unset($x);

// $y = $x ?? "$x nu exista";
// echo $y;

// $a = 5;
// $b = 6;

// if(($a<$b) xor ($b==6)) {
//   echo "Adevar curat zic: nu sunt egale!";
// }
// else {
//   echo "O contradictie oarecare";
// }

// $t = date("H");
// var_dump($t);

// $t = date("Y-m-d"); //data numerica
// var_dump($t);

// $t = date("d-m-Y"); //data numerica
// var_dump($t);

// $t = date("F d, Y"); //F inseamna luna scrisa cu litere
// var_dump($t);

// $culoare = "portocaliu";

// $result = match($culoare) {

// "rosu" => "este culoarea rosie",
// "portocaliu" => "culoarea portocalie",
// "verde" => "culoarea verde",

// };

// echo $result;

//cu while loop genereaza numerele intre 100 si 150

//$nr = 0 ;

// while($nr<150) {
//  $nr++;
//  echo $nr."<br>";
// }

//while($nr<50): $nr++; echo $nr."<br>"; endwhile;

//afisati numerele de la 0 la 200 din 30 in 30 cu while loop

// $nr = 0;

// // while($nr<200) {
// //   $nr+=30;
// //   echo $nr."<br>";
// // }

// do {
//   $nr+=10;
//   echo $nr."<br>";
// } while ($nr<100);

//afiseaza nr de la 20 la 0 descrescator cu bucla for si fara a defini vreo variabila in afara buclei

// for ($i=0, $x=20; $i<=20; $i++, $x--) {
//   echo $x."<br>";
// }

//$arr = array(1,2,3,4,5);

// for($i=0; $i<=sizeof($arr)-1; $i++) {
//   echo $arr[$i].", ";
// }

//for($i=0; $i<=sizeof($arr)-1; $i++): echo $arr[$i]."-"; endfor;

// foreach($arr as $z) {
//   echo $z . "---";
// }

// foreach($arr as $k => $v) {
//   echo "$k reprezinta indexul pentru $v"."<br>";
// }

//foreach($arr as $k => $v): echo "$k index pentru $v"."<br>"; endforeach;

// for($i=0; $i<10; $i++) {
//   echo $i;
//   if ($i==5) break;
// }

// $i = 0;
// while ($i++ < 10) {
//   switch($i) {
//     case 1: continue 2;
//   }
// }

// $string = "Este\ro\nseara\nde\nmai \u{C2A9};:Primavara";
// echo $string;

//transformati stringul zalut in salut

// $string = "zalut";
// $string[0] = "s";
// echo $string;

//folosind strlen functie modificati stringul zara in zarr

// $s = "zara";
// //$s[strlen($s)-1] = "r";
// //echo $s;

// // modifica stringul zara in zaza cu str_replace

// // $modificare = str_replace("r", "z", "$s");
// // echo $modificare;

// //transforma stringul zara in magazinul zara cu substr_replace

// $adaugare = substr_replace($s, "magazinul ", 0, 0);
// //echo $adaugare; //magazinul zara

// $substr = substr($adaugare, 0, 3);
// //echo $substr;
// //echo strtoupper($substr);
// //echo strtolower($substr);
// $strpos = strpos($substr, "g");
// //echo $strpos;

// $length = strlen($adaugare);
// echo $length;

// $a = [5,8,9,2];

// $a[] = 7;

// print_r($a);

//array asociativ

//$a =["a" => "prima litera alfabet", "b" => "a doua litera alfabet", "a treia litera alfabet"];
//print_r($a);
//var_dump($a["b"].$a["c"]);

// $a =["a" => "prima litera alfabet", "b" => "1", "c" => "2"];
// //print_r($a);
// var_dump($a["b"].$a["c"]);

// $a = [["soare","vara"],["zapada","iarna"],[5,6]];

// $a[1][0] = "gheata";
// //print_r($a);
// //echo $a[2][1];

// $string = $a[0][1] . " exista mult " . $a[0][0];
// echo $string;

//$a = 12;

// if ($a == 5): echo "a este 5";
// elseif($a == 10): echo "a este 10";
// else: "a este un numar oarecare";
// endif;

// switch($a):
//   case 9: echo "a este 9"; break;
//   case 10: echo "a este 10"; break;
//   case 11: echo "a este 11"; break;
//   default: echo "nu stiu ce e a"; break;
// endswitch;

// match($x) {
//   1 => $output = 'True',
//   2 => $output = 'False',
//   default => $output = 'Unknown'
// };
// echo $output;

// function noapteBuna($a, $b="strainule sau straino!") {
//   echo $a . $b . "!"."<br>";
// }

// noapteBuna("Noapte buna", b: " Printul meu");
// noapteBuna("Noapte buna ");
// noapteBuna("Noapte buna ", "Stefan");
// noapteBuna("Noapte buna ");
// noapteBuna("Noapte buna ", "Cecilia");
// noapteBuna("Noapte buna ");
// noapteBuna("Noapte buna ", "Eduard");
// noapteBuna("Noapte buna ", "Alexandra");
//pg 50




// Intr-un parc se joaca 3 copii care au greutatile a,b,c. Sa se stabileasca
//      daca se pot aseza pe un balansoar astfel incat acesta sa stea in echilibru.

// $a = rand(10,40);
// $b = rand(10,40);
// $c = rand(10,40);

// if ($a+$b==$c || $b+$c==$a || $c+$a==$b) {
//   echo "Cei doi copii care au impreuna aceeasi greutate cu cel de-al treilea copil se pot aseza in balansoar doi intr-o parte si cel mai greu in cealalta parte";
// } elseif ($a==$b || $b==$c || $c==$a){
//   echo "Cei doi copii care au greutati egale se pot aseza unul intr-o parte si celalalt in cealalta parte a balansoarului";
// } else {
//   echo "Desi copiii se pot aseza in balansoar, acestia nu vor fi in echilibru.";
// }



// $date = date('F, d-Y');
// echo $date;

//Trebuie sa scrieti un program care sa permita utilizatorului sa ghiceasca un numar imaginar; definiti numarul dorit in cod. De asemenea pentru a anunta utilizatorul cat de aproape este raspunsul, anuntati-l prin mesaj daca diferenta dintre numarul ghicit si numarul dat este mai mica decat 10. Incercarea se introduce prin parametrul GET numit "number".

// $my_number = 9;
// $number = $_GET["number"];

// //echo $number;

// if ($my_number==$number) {
//   echo "Felicitari! Ati ghicit numarul!";
// }
// else if(abs($number-$my_number) < 10) {
//   echo "Sunteti aproape sa ghiciti!";
// } 
// else {
//   echo "Mai incercati!";
// }

//Pe pagina exista variabila $page. In variabila este permisa existenta uneia din doua valori pe baza carora va fi incarcata pagina. Cele doua valori sunt "index" si "products". Daca valoarea este "index", se incarca pagina index.html, daca valoarea este "products", se incarca pagina products.html. Daca nicio valoare nu coincide cu valoarea solicitata, se incarca pagina login.html.

// $page = "index"; //products

// if ($page == "index") {
//   $page="index.html";
// }
// elseif ($page=="products"){
//   $page="products.html";
// } 
// else {
//   $page="login.html";
// }

// echo $page;

// Exercițiul 1: Afișarea numerelor pare
// Scrie un program PHP care afișează toate numerele pare de la 1 la 20.

// $i=0;

//  while ($i<=20) {
//   $i++;
//   if($i%2==0) { 
//     echo $i."<br>";
//   }
   
// };



//Exercițiul 2: Suma numerelor impare
//Scrie un program PHP care calculează suma numerelor impare de la 1 la 50 folosind o buclă while.

// $sum = 0;
// $i = 0;

// while($i<50) {

//  $i++;
//   if(!($i%2==0)) {
//   //echo $i;
//   $sum += $i;
//   }
// }

// echo $sum;


// Exercițiul 3: Factorialul unui număr
// Scrie un program PHP care calculează factorialul unui număr dat. Folosește o funcție recursivă pentru a realiza acest lucru.

// $n = 5;
// $result=1;
// (5-1)//4
// *
// (5-2)//3
// *
// (5-3)//2
// *
// (5-4)//1
// =nr factorial 120

//$factorial = (n-1)*(n-2)*n-...

// for ($i=1; $i<$n; $i++) {
//   $expr = ($n-$i);
//   $result *= $expr;
// }
// echo $result;

// Exercițiul 2: Suma cifrelor unui număr
//Scrie un program PHP care calculează suma cifrelor unui număr dat.

// $numar = 54879222588;
// $sum = 0;

// $str_numar = strval($numar);


// for($i=0; $i<strlen($str_numar); $i++){
//   $cifra = (int)$str_numar[$i];
//   $sum+= $cifra;
// }

// echo $sum;



// $nr = 12546.2354878;

// $nr_formatat = number_format($nr, 2, ".", ",");
// echo $nr_formatat;

// Sa se progrmaeze un senzor care determina cantitatea de carburant aflata in rezervor.
//  Daca candtitatea de combustibil scade sub 10 litri sa afiseze un mesaj de avertizare cu portocaliu: "Va rog sa alimentati!“.
//  Daca cantitatea de combustibil este< 1 sa afise cu rosu mesajul:"Ati ramas fara combustibil. Trebuie sa ne oprim!“
//va exista variabila $viteza = nu nr random 60-80



// Exercițiul 3: Tabel de înmulțire
// Scrie un program PHP care afișează un tabel de înmulțire de la 1 la 10.


//1*1 = 
//1*2 =
//1*3...

// $unu = 1;

// for ($i=1; $i<=10; $i++) {
//   $produs = $unu*$i;
//   echo "$unu "."* ". "$i"." = "."$produs"."<br>";
// }



// Exercițiul 1: Afișarea numerelor prime
// Scrie un program PHP care afișează toate numerele prime de la 1 la 50.

//$nr%$x ==0 - $x este divizorul lui $nr

// $nr=1;


// while($nr<= 50) {  

// $divizor = 0;

//   for($i=1; $i<=$nr; $i++) {
//     if($nr%$i==0) {
//       $divizor++;
//     }
//   }

//   if($divizor==2) {
//     echo $nr."<br>";
//   }
  
//   $nr++;
// }





// Exercițiul 3: Verificarea unui număr perfect
// Scrie un program PHP care verifică dacă un număr dat este perfect. Un număr perfect este un număr întreg pozitiv care este egal cu suma divizorilor săi proprii.

//nr % divizor == 0
//0 calculam divizorii nr
//1 afisam divizorii unui numar intreg pozitiv
//2 facem suma divizorilor
//3. verificam conditia numar perfect == suma

// $nr = 28;
// $divizor=0;
// $sum = 0;

// for ($i=1; $i <= $nr / 2; $i++) {

//   $divizor = $i;

// if($nr%$divizor==0) {
//   //echo $divizor."<br>";
//   $sum = $sum + $divizor;
// }
// }

// if ($nr == $sum) {
//   echo "Numarul $nr este un numar perfect";
// } else {
//   echo "Numarul $nr nu este un numar perfect";
// }

// $nr = 28;
// $sum = 0;

// for ($i = 1; $i <= $nr / 2; $i++) {
//   if ($nr % $i == 0) {
//     $sum += $i;
//   }
// }

// if ($nr == $sum) {
//   echo "Numărul $nr este un număr perfect";
// } else {
//   echo "Numărul $nr nu este un număr perfect";
// }


// Exercițiul 4: Verificarea palindromului
// Scrie un program PHP care verifică dacă un număr dat este un palindrom. Un număr palindrom este un număr care rămâne același atunci când cifrele sale sunt inversate.

// $nr = 1221;
// $nr_str = strval($nr);

// if((int)$nr_str[0]==(int)$nr_str[3] && (int)$nr_str[1]==(int)$nr_str[2]) {
//   echo "Numarul $nr este un palindrom.";
// }
// else {
//   echo "Numarul $nr nu este un palindrom.";
// }



// Exercițiul 5: Găsirea cifrei maxime
// Scrie un program PHP care primește un număr de la utilizator și găsește și afișează cifra maximă din acest număr.

// $nr = 456542698;

// $arr = str_split($nr);
// //print_r($arr);

// $max = max($arr);
// echo $max;

// //multumesc



//diferenta intre echo si print

// echo este o instructiune. print este o functie. print returneaza 1. echo poate afisa mai multe valori. echo afiseaza, nu returneaza valori, daci nu poate fi folosit ca valoare booleana in conditiile structurilor de decizie. print afiseaza o valoare, 1. printf ofera functia de formatare specifica cu argumente. print_r afiseaza structurat un array. var_dump afiseaza si valoarea si tipul de date.



// Utilizați funcția print pentru a afișa un mesaj în PHP.
$var = "Salut";
//print($var);

// Utilizați instrucțiunea echo pentru a afișa un mesaj în PHP.

//echo "mesaj";

// Creați un array indexat cu câteva elemente.

$arr = ['septembrie', 'octombrie', 'decembrie'];
//print_r($arr);

// Accesați și afișați un element specific dintr-un array indexat.

//afiseaz al doilea element din array
//print_r($arr[1]);

//schimb valoarea ultimului element de arary
$arr[2] = "iulie";
//print_r($arr);

//adaug un element nou in array

$arr[] = "o luna anonima";
//print_r($arr);

//adaug un element nou in array
$element = "alta luna anonima";
array_push($arr, $element);


//sterg ultimul element din array
array_pop($arr);


//adaug un eleemnt de array la inceputul sirului
$element2 = "o luna de iarna";
array_unshift($arr, $element2);

//sterg oprimul element din array
array_shift($arr);
//print_r($arr);


// Creați un array multidimensional pentru a stoca informații despre persoane.
//o variabila se poate defini si cu underscore la inceputul denumirii variabiliei. acelasi lucru nu este valabil legat de numere
$_multi_arr = array("cer" => array("pasari" => "zboara", "soare" => "straluceste", "stele" => "sclipesc"), "copac" => array("frunze", "tulpina", "radacina"));
//print_r($_multi_arr);

//arrayul meu multidimensional contine doua arrayuri asociative cheie valoare cu cheile cer si copac si valorile reprezentate de cate un array. primul array contine un array asociativ si al doilea un array indexat

//afisez valoarea straluceste


$val = $_multi_arr["cer"]["soare"];
//echo $val;

//modific valoarea tulpina cu valoarea zebra

$_multi_arr["copac"][1] = "zebra";


//adaug un al treilea array in arrayul multidimensional
$_multi_arr[] = array(1,2,3);


//adaug un al patrulea array la sfarsitul arrayului meu multidimensional
$ultimul_array = [45, 56, 63, "lingura"];
array_push($_multi_arr, $ultimul_array);


//????sterg ultimul element din al treilea array din arrayul multidimensional, deci cifra 3
 $arr_trei = $_multi_arr[0];
 //print_r($arr_trei) ;
 array_pop($arr_trei);
// echo($stergere);
  //print_r($arr_trei);



// Accesați și afișați o valoare specifică dintr-un array multidimensional.

// $m_arr = [
// [1,2,3,5,9],
// ["colectie" => ["viniluri", "carti", "stilouri"]],
// ["usa", "scaun"]
// ];

//accesez scaun
//echo $m_arr[2][1];
//

//schimb valoarea lui scaun

//$m_arr[2][1] = "tabla";
//print_r($m_arr);

//accesez valoare carti

//echo $m_arr[1]["colectie"][1];

//schimb valoarea stilouri

//$m_arr[1]["colectie"][2] = "vinuri";

//print_r($m_arr);

//afisez al doilea subarray

//print_r($m_arr[1]);

//afisez arrayul  ["viniluri", "carti", "stilouri"]

//print_r($m_arr[1]["colectie"]);

//mai adaug un element in acest array
///array_push($m_arr[1]["colectie"], "monede vechi");


//adaug un nou element la inceputul primului subarray

//array_unshift($m_arr[0], -1);
//print_r($m_arr);




// Creați un array asociativ pentru a stoca informații despre o carte.


//$carte = ["nr pagini" => 300, "autor" => "Cezare Pavese", "titlu" => "noapte de sarbatoare"];



// Accesați și afișați o valoare specifică dintr-un array asociativ.

//afisez valoarea cheii autor

//echo $carte["autor"];

// Adăugați o nouă valoare într-un array indexat.

//$arr_indexat = ["mere", "pere", "portocale"];

//prima metoda

//$arr_indexat[] = "banane";


//a doua metoda
//adaug un nou element la inceputul arrayului

//array_unshift($arr_indexat, "caise");


//a treia metoda adaug un nou element la sfarsitul arrayului

//array_push($arr_indexat, "afine");
//print_r($arr_indexat);


// Adăugați o nouă valoare într-un array asociativ.

// $carte = ["nr pagini" => 300, "autor" => "Cezare Pavese", "titlu" => "noapte de sarbatoare"];

//1 metoda

// $carte["ISBN"] = 45515486798;


// Utilizați funcția printf pentru a formata și afișa un mesaj în PHP.
// Exemplu de formatare a unei șiruri de caractere cu printf.
// Exemplu de formatare a unui număr întreg cu printf.
// Exemplu de formatare a unui număr zecimal cu printf.

// $nr = 1000;
// $string = "PHP";
// $float = 0.78954;

// printf("I love %s something like %d times more than JavaScript and %.2f times more than CSS!!!", $string, $nr, $float);

// $string = "professional activity";
// $nr = 100;

//printf("If your work with me is the result of your %s is %d%% better than if a certain person is paying you to focus on me.", $string, $nr);

//%% echivaleaza cu % cand vrem sa il afisam

// $nr = 1234567.4564897489;

//echo number_format($nr, 2, ".", ",")."$ baby";

//in urma formatarii integer devine string

//$_SERVER - informatii despre server si mediul in care ruleaza scriptul php.ex $_SERVER['SERVER_NAME'];

//$_REQUEST => get + post + cookie

//echo $_SERVER['SERVER_NAME'];\

//scrie un exemplu cu care sa iti demonstrezi intelegerea de variabila variabila

// $variabila1 = "gogoasa";
// $$variabila1 = "alune";

//echo $gogoasa;

//in acest exemplu am creat variabila variabila pornind de la $variabila1. folosim $$ pentru a crea variabila variabila. ce face aceasta variabila - ii ofera un fel de superputeri valorii variabilei initiale astfel incat valoarea poate fi folosita pe post de variabila/se transforma in variabila si citeste valoarea inscrisa in $$variabila1 (deci variabila variabila). numele primei variabile se transforma in variabila in care se depoziteaza valoarea variabilei variabilei marcate cu $$. dar daca am citi valoarea $variabila1 cu un singur $ se va afisa valoarea gogoasa, adica $ pastreaza valoarea sa initiala dincolo de aceea ca se creaza variabila de tip $$

//echo $variabila1;

//da un exemplu cu care sa iti demonstrezi cunostintele in legatura cu felul cum functioneaza variabila de referinta

// $a = "padure";
// $b = "vreascuri";
// $a = &$b;
//echo "Variabila a egala cu $a"."<br>"."Variabila b egala cu $b"."<br>";

//lui $a i s-a atribuit valoarea lui $b. de asemenea aceasta valoare este una de referinta prin folosirea simbolului &
//
// $a = "sarbatoare";
//echo $a."<br>";
//echo $b;
//dupa cum se observa am schimbat doar valoarea lui $a dar s-a modificat si valoarea lui $b, pentru ca valoarea acestor doua variabile ocupa acelasi spatiu de memorie.


//Scrie un exemplu cu care sa demonstrezi intelegerea si utilizarea variabilei superglobale $_GET[]

// $nume = $_GET["nume"];
// $prenume = $_GET["prenume"];

// echo "Numele meu este:" . $nume. " " . $prenume;

//In acest exemplu simplu am definit in url valorile pentru cheile nume si prenume si le-am preluat cu variabila superglobala $_GET[] atribuindu-le celor doua variabile sus mentionate pe care ulterior le-am citit cu echo dupa concatenare

//ce face variabila superglobala $_POST[] 

//aceasta variabila se foloseste pentru a accesa de obicei datele dintr-un formular dupa ce s-a dat submit. cu POST se face conexiunea intre datele introduse de utilizator si codul php in care acestea sunt prelucrate. ele au un caracter de confidentialitate mai inalt si se utilizeaza cand lucram cu date in volum mare si care este bine sa fie mai securizate. POST face parte din antetul URL.


$sir[0] = "vita-de-vie";
$sir[1] = "mana-Maicii-Domnului";
$sir[2] = "coacaz";

//print_r($sir);



$oras[] = "Constanta";
$oras[] = "Bucuresti";
$oras[] = "Flensburg";

//print_r($oras);
$sir_numeric_clar = range(50,100);
//print_r($sir_numeric_clar);
//echo $sir_numeric_clar[25];

//echo "Mi-a placut foarte mult sa ma plimb intr-o zi cu soare in portul orasului $oras[2].";
//multumesc
 
unset($sir_numeric_clar[1]);

//print_r($sir_numeric_clar);

// $preferinte = array(
//   array("Ecaterinei", "marea", "cartile", "programarea"),
//   array("Mamei", "pietricelele", "florile", "ceaiul negru"),
//   array("Lui Valentin", "jocurile", "tehnologia", "AI-ul")
// );

// foreach($preferinte as $item) {
//   echo $item[0] . " ii plac " . $item[1] . ", $item[2] si $item[3]!"."<br>";
// }

//count si sizeof aceeasi functie - returneaza nr elementelor din sir

//$nr_elem = sizeof($preferinte);
//echo $nr_elem;

//$numeric = [5,1,65,89,2,45,6,54,47];
//sort($numeric);
//print_r($numeric);
//foreach($numeric as $numar) {
  //echo $numar." ";
//}

// rsort($numeric);
// foreach($numeric as $numar2) {
//   echo $numar2." ";
// }

// ordoneaca crescator dupa valoare

$sir2["programator"] = "programare";
$sir2["scriitor"] = "scriitura";
$sir2["farmacist"] = "consiliere";

//asort($sir2);
//print_r($sir2);

//crescator dupa cheie

//ksort($sir2);
//print_r($sir2);

//descrescator dupa cheie
///krsort($sir2);
//print_r($sir2);


// $preferinte = array(
//   array("Ecaterinei", "marea", "cartile", "programarea"),
//   array("Mamei", "pietricelele", "florile", "ceaiul negru"),
//   array("Lui Valentin", "jocurile", "tehnologia", "AI-ul")
// );

// shuffle($preferinte);
// foreach($preferinte as $item) {
//   echo $item[0] . " ii plac " . $item[1] . ", $item[2] si $item[3]!"."<br>";
// }
//print_r($preferinte);

$arr_10 = ["cana", "farfurie", "furculita", "lingura", "polonic"];
$slice = array_slice($arr_10, 0, 2);
$slice2 = array_slice($arr_10, -2);

//print_r($slice);
//print_r($arr_10);

//print_r($slice2);

$merge = array_merge($slice, $slice2);
//print_r($merge);

$string3 = "lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum alias voluptatibus magnam, iusto nobis numquam debitis modi adipisci! Deserunt nihil saepe in nobis alias unde nam consequuntur repellat aliquid magnam";

$arr_string = explode(" ", $string3);
//print_r($arr_string);

// $string4 = implode(" ", $arr_string);

// print_r($string4);

// for($i=0; $i<count($arr_string); $i++) {
//   echo "Cuvantul nr $i in string este \"$arr_string[$i]\"."."<br>";
// }

//array_diff restanta

// $numeric = [5,1,65,89,2,45,6,54,47];
// $suma = array_sum($numeric);
// //print_r($numeric)
// print_r($suma);

// $numeric = [5,5,5,1,65,89,892,45,6,54,54,47];
// $unic = array_unique($numeric);
// print_r($unic);

//$arr101 = [2,5,1,7,4,3,8];
//a se sorta in ordine crescatoare.

//sort($arr101);
//print_r($arr101);


//var_dump( $array[2][1]);
 //echo $array[1][2];
 //echo $array[0][0];


//  Exercițiul 1: Afișarea elementelor unui array
//Să se scrie un program care afișează fiecare element al unui array pe o linie nouă, folosind o buclă.


// $array = array(
//   array(1, 2, 3),
//   array("a", "b", "c"),
//   array(true, false, true)
// );

// foreach($array as $item) {
//   echo $item[0]."<br>".$item[1]."<br>".$item[2]."<br>";
// }

// Exercițiul 2: Suma elementelor unui array
// Să se calculeze suma elementelor unui array și să se afișeze rezultatul.

// $arr101 = [2,5,1,7,4,3,8];
// $sum = 0;

// foreach($arr101 as $item) {
//   $sum = $sum + $item;
// }
// //echo $sum;

// if(in_array(5, $arr101)) {
//   echo "Avem 5 in array" ;
// }

// $inceput = "Aceasta este o variabila importanta";
// $integer = 4;

// $variabila_importanta = sprintf("%s si fiti cu ochii in %d sa nu o pierdeti!", $inceput, $integer);
// //echo $variabila_importanta;

// if($variabila_importanta) {
//   echo "variabila nu s-a pierdut si are valoarea true";
// }

//arata-ti intelegerea functiei print utilizand-o intr-o expresie

// $a = 1;

// $a ? print "TRUE" : print "FALSE";

$arr_dosar = [
[1, "Viorel", "Cascaval", 55555555],
[2, "Elena", "Strungareata", 888888888],
[3, "George", "Agricol", 44444444],
];

for($i=0; $i<count($arr_dosar); $i++) {
echo "In linia " . $arr_dosar[$i][0] . " a dosarului figureaza " . $arr_dosar[$i][1] . " " . $arr_dosar[$i][2] . " cu ID-ul " . $arr_dosar[$i][3]."."."<br>";
}


 ?>
