<?php
//m-am oprit la v 10 din 19



function calculate($a = 10, $b = 10) {
  global $x;
  $x = 10;
  $c = $a + $b + $x;
  return $c;
}



echo calculate();
echo $x;
// definind variabila x ca fiind global in interiorul functiei o facem accesibila si inafara ei, insa doar dupa ce este apelata pentru ca functia nu reactioneaza la intalnirea parserului/a blocului de cod ci la apelare.



?>