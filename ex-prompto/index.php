 <?php

$stock = 0;
$produs = "Oreo";

if($stock > 0){
    $mesaj = "Produs pe stock.";
}else{
    $mesaj = "Produsul nu se mai afla pe stock, <br>Va rugam sa reveniti mai tarziu!";
}

?>

<h2>Produs : <?= $produs ;?></h2>
<p><?= $mesaj ;?></p>

<!-- Utilizand structura if else, pentru cei mai curajosi , imi puteti face sa imi apara : a) Produsul nu se mai afla in magazin si b ) Produsul se afla in magazin , utilizand 2 variabile 


as fi completat utilizand doua variabile in codul legat de afisarea rezultatului. daca se specifica ca trebuie utilizate doua variabile, ma gandesc ca nu am voie sa folosesc decat doua in intregul cod, dar s-au folosit trei variabile .
-->


<!-- // $numarul_1 = 20;
//     $numarul_2 = 40;

//         if($numarul_1 > $numarul_2 ){
//         $mesaj = "Numarul {$numarul_1} este mai mare ca numarul {$numarul_2}";
//         }elseif($numarul_2 == $numarul_1){
//             $mesaj = "Numere egale";
//         }else{
//             $mesaj = "Eroare";
//         }
//     echo $mesaj; -->

   ?>

    <!-- inca un exercitiu, avem 2 variabile $nr_1 si $nr_2 => vreau sa verificati care numar este mai mare sau mai mic, o alta verificare sa fie daca sunt egale ( 30 = 30 ) sa fie afisat un mesaj corespunzator , si ultima => un mesaj de eroare
    if, elseif si else

     m-as fi gandit la sintaxa de mai sus daca ar fi existat conditia: 
     inca un exercitiu, avem 2 variabile $nr_1 si $nr_2 => vreau sa verificati daca numarul 1 este mai mare decat numarul doi, si o alta verificare sa fie daca sunt egale ( 30 = 30 ) sa fie afisat un mesaj corespunzator , si ultima sa dea eroare daca nr2 este mai mare decat numarul 1, folosind if, elseif si else

     in felul in care este formulata conditia, se poate concluziona doar prin excludere ca nr doi este mai mare decat numarul 1, caz in care nu ni se confirma comparatia decat prin eroare, ceea ce reprezinta o discriminare fata de cazul in care numarul doi este mai mare. in acelasi timp nu exista nici un indiciu in conditie care sa ne faca sa ne gandim ca este ok ca eroare asa fie legata de conditia in care al doile numar este mai mare
     --> 
<!--      
     Utilizand structura if else, pentru cei mai curajosi , imi puteti face sa imi apara : a) Produsul nu se mai afla in magazin si b ) Produsul se afla in magazin , utilizand 2 variabile -->
     
     
     
     