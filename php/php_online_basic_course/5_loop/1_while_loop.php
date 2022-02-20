<?php

//while loop
$i = 0;
while ($i <= 10) {
    echo $i . '<br>';
    $i++;
}

echo "<br>";
echo "<hr>";

$seven = "";
$odd = "";
$i =1;

while ($i <= 10) {
   if ($i%2==0) {
       $seven = $seven . " " .$i;
   }else{
       $odd = $odd . " " .$i;
   }

   $i++;
}

echo "The even no = " . $seven . "<br>";
echo "The odd no = " . $odd;

echo "<br>";
echo "<hr>";

$i = 1;

while ($i<= 5) {
  $j = 1;
  while ($i<= $i) {
      echo $i;
      $j++;
  }
  echo "<br/>";
  $i++;
} 
echo "<br>";
echo "<hr>";

// $i = 1;
// while ($i )