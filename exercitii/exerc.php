<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

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

</body>
</html>


