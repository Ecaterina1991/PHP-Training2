
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php

$stoc = 0;
$produs = "Oreo";

$mesaj=<<<ECA
<h2>Produs: $produs</h2>
<p>Produsul nu se mai afla pe stoc, <br> Va rugam sa reveniti mai tarziu!</p>
ECA;

if($stoc>0) {
  echo "Produsul se afla in magazin";
}
else {
  echo "$mesaj";
}



?>

<!-- Utilizand structura if else, pentru cei mai curajosi , imi puteti face sa imi apara : a) Produsul nu se mai afla in magazin si b ) Produsul se afla in magazin , utilizand 2 variabile -->




</body>
</html>