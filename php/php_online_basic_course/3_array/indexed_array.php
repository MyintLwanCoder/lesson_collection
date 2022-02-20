<?php
//indexed array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo '<pre>';
var_dump($cars);
echo '</pre>';
//count
echo count($cars);
echo "<br>";
//for loop
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}
//foreach loop
foreach ($cars as $car) {
    echo $car;
    echo "<br>";
}
echo "<br>";
echo "<hr>";

//indexed array
$array = ['apple', 'banana', 'orange'];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";