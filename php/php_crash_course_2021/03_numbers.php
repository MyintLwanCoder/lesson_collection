<?php

//Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
//Arithmetic operations
echo ($a + $b) * $c;
echo "<br>";
echo ($a - $b);
echo "<br>";
echo ($a * $b);
echo "<br>";
echo ($a / $b);
echo "<br>";
echo ($a % $b);
echo "<br>";
//Assignment wih math operators
// $a += $b; echo $a ."<br>"; //$a = 9
// $a -= $b; echo $a ."<br>";  //$a = 1
// $a *= $b; echo $a ."<br>";  //$a = -20
// $a /= $b; echo $a ."<br>";  //$a = -1.2
// $a %= $b; echo $a ."<br>";   //$a = 1

//Increment operator
echo $a++;
echo ++$a;
//Decrement operator
echo $a-- .'<br>';
echo --$a . '<br>';
//Number checking functions
is_float(1.25); //true
is_double(1.25); //false
is_int(5); //true
is_numeric("3g.45"); //false
//conversion
$strNumber = "12.34 ";
$number = intval ($strNumber);
var_dump($number);
echo "<br>";
//Number functions
echo "abs(-15)" . abs(-15) . "<br>";
echo "pow (2, 3)" . pow(2, 3) . "<br>";
echo "sqrt (16)" . sqrt(16) . "<br>";
echo "max (2, 9, 3)" . max(2, 9, 3) . "<br>";
echo "min (2, 3)" . min(2, 3) . "<br>";
echo "round (2.4)" . round(2.4) . "<br>";
echo "round(2.6)" . round(2.6) . "<br>";
echo "floor (2.6)" . floor(2.6) . "<br>";
echo "ceil (2.4)" . ceil(2.4) . "<br>";
//formattingnumbers
$number = 1234456789.12345;
echo number_format($number, 2, ",", ".");
?>