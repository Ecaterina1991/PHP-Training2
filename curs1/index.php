<?php

$status = "admin2";

$numbers = array(
              "012 256 365",
              "012 256 562",
              "012 256 412",
              "012 256 965",
              "012 256 785"
                );

if($status === "admin") {
  foreach($numbers as $index => $value) {
    echo "Number " . $index . ": " . $value . "<br>";
   } 
  } else {
  // foreach($numbers as $index => $value) {
  //   $value = substr_replace($value, "*** *", 4, 5);
  //   echo "Number " . $index . ": " . $value . "<br>";
//}    

foreach($numbers as $index => $value) {
    $num = "";
  
    for($i=0; $i < strlen($value); $i++) {

     if($i>3 && $i < (strlen($value) - 2) && $i!=7) {
       $num .= "*";
     }

     else {
      $num .= $value[$i];
     }

    }

    echo "Number " . $index . ": " . $num . "<br>";
 }

}

?>