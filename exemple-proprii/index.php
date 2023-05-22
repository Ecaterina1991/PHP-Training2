 <?php

$profit = array("Catena" => 546258963, "Help Net" => 4555231965, "Dona" => 852055365, "Apollo" => 450000);

 /*
Se da urmatorul sir:



Creati un program bazat de profitul firmelor farmaceutice, pentru a crea un grafic primitiv in care sa fie afisat profitul fiecarei firme pe o scara de la 1 la 10, in functie de procentaj. Se va forma un procent astfel incat lantul farmaceutic cu cel mai mare profit sa fie 100%.


In diagrama, partile incluse trebuie prezentate cu semnul *, in timp ce partile care nu acopera valoarea nu ar trebui sa fie prezentate (aceste semne sunt arbitrare).

In partea de jos a listei ar trebui sa se afiseze pe verticala numele firmelor. 

Schema rezolvare:
1. stabilirea procentuala a profitului fiecarei firma in raport cu cel mai mare dintre profituri. aflarea valorii cea mai mare din sir pentru profit. aflarea care dintre valorile sirului asociativ are cea mai mare valoare. 
 */
$max = 0; // setez $max = 0 ca sa am unde depozita fiecare valoare si ca sa am cu ce compara fiecare valoare pentru a stabili care este cea mai mare valoare din sir
$lungime_max_denumire = 0;

foreach($profit as $k => $v) 
{
  if($v>$max) 
    $max = $v;
  
  //in fiecare iteratie compar fiecare valoare cu $max (care la un moment dat devine reprezentant al celei mai mari valori din sir iar la finalul ultimei iteratii va avea valoarea maxima a sirului)

  //acum aflu valoarea cea mai mare atat cat tine de lungimea stringurilor care reprezinta denumirea firmelor ca sa avem un punct de referinta de tip $i< lungime-max atunci cand vom afisa denumirile

  if (strlen($k)> $lungime_max_denumire) 
    $lungime_max_denumire = strlen($k);
  
}

//calculez procentul prin calcul matematic


/*Regula de trei simpla
100% .............$max
$percent................$v

$percent = $v * 100/$max;

Totusi nu putem include $v in aceasta formula pentru ca $v variaza in functie de fiecare valoarea in parte, valoare din sirul $profit si cand vom itera prin sir cu foreach valoarea va fi diferita in fiecare iteratie, deci nu poate fi inclusa acum, deci momentan vom scoate $v din formula de aici si il vom reintroduce in bucla foreach. De asemenea intrucat rerpezentarea noastra grafica se exprima in maxim 10 stelute, si valoarea procentului ar trebui sa fie o valoare intre 1 si 10. De exemplu daca procentul firmei x din maximul stabilit este fictiv 64%, trebuie sa impartim la 10 acest procent ca sa obtinem o valoare aproximativa intre 1 si 10.

*/

$percent = 100/$max;

for($i=10; $i>=0; $i--) 
{
 foreach ($profit as $k => $v) 
 {
  //calculez fiecare procent exprimat intre 1 si 10
   $new_percent = ceil(($percent*$v)/10);
   //greseala: nu am folosit ceil pentru rotunjire

   if($new_percent>=$i) 
    echo "*"." "." ";
   else 
    echo "<span style='color:white;'>*</span>"." "." ";
    //greseala nu am pus intre ghilimele span. greseala nu am concatenat steluta de culoare alba cu spatiul coloanei
   } 
   echo "<br>";
   //greseala br se pune dupa foreach inauntrul lui for
}
for($i=0; $i<$lungime_max_denumire; $i++) 
{
  foreach($profit as $k=>$v) 
  {
    if(strlen($k)>$i) 
    {
      //greseala am trecut mai mic in loc de mai mare
      $den = str_split($k);
      echo $den[$i]." "." ";
    }
    else 
      echo " ";
  }
  echo "<br>";
}

 ?>