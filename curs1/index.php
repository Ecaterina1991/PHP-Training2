<?php

$status = "admin";

$numbers = array(
              "012 256 365",
              "012 256 562",
              "012 256 412",
              "012 256 965",
              "012 256 785"
                );

if($status === "admin2") {
  foreach($numbers as $index => $value) {
    echo "Number " . $index . ": " . $value . "<br>";
   } 
  } else {
  foreach($numbers as $index => $value) {
    $value = substr_replace($value, "*** *", 4, 5);
    echo "Number " . $index . ": " . $value . "<br>";
  }    
}

?>