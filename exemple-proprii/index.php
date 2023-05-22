 <?php

$profit = array("Catena" => 546258963, "Help Net" => 455525165, "Dona" => 346258963, "Apollo" => 450000);


$max = 0; 
$lungime_max_denumire = 0;

foreach($profit as $k => $v) 
{
  if($v>$max) 
    $max = $v;

  if (strlen($k)> $lungime_max_denumire) 
    $lungime_max_denumire = strlen($k);
}


$percent = 100/$max;

for($i=10; $i>=0; $i--) 
{
 foreach ($profit as $k => $v) 
 {
 
   $new_percent = ceil(($percent*$v)/10);
   if($new_percent>=$i) 
    echo "#"."<span style='color:white;'>*</span>";
   else 
    echo "<span style='color:white;'>*</span>"."<span style='color:white;'>*</span>";
   } 
   echo "<br>";
   
}
for($i=0; $i<$lungime_max_denumire; $i++) 
{
  foreach($profit as $k=>$v) 
  {
    if(strlen($k)>$i) 
    {
      $den = str_split($k);
      echo $den[$i]."<span style='color:white;'>*</span>";
    }
    else 
    "<span style='color:white;'>*</span>";
     
  }
  echo "<br>";

}

// $chei = array_keys($profit);
// var_dump(strlen($chei[1]));
//var_dump($lungime_max_denumire);

 ?>