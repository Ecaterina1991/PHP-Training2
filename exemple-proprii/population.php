
<?php
$population = ["London" => 7556900, "Bucharest" => 1500000, "New York" => 8406000, "Paris" => 11836970];
$max=0;
$longestCityName = 0;
foreach($population as $k => $v) 
{
  if($v>$max)
  $max = $v;
  if(strlen($k)>$longestCityName)
  $longestCityName = strlen($k);
}
$percent = 100/$max;

for($i=10; $i>=0; $i--) {
  foreach($population as $k => $v)
  {
    $currentPercent = ceil(($percent * $v)/10);
    if($currentPercent>=$i)
    echo "#"." ";
  
  else 
    echo "<span style='color:white;'>#</span>"." ";
}
echo "<br>";
}
for($i=0; $i<$longestCityName; $i++) {
  foreach($population as $k => $v)
  {
    if(strlen($k) > $i)
    {
      $cityArr=str_split($k);
      echo $cityArr[$i]." ";
    }
    else
    echo " ";
  }
  echo "<br>";
}
?>