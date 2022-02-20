<?php
//Muli-Dimensional Array
$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo "<br>";
echo "<hr>";
//for loop
foreach ($cars as $car) {
    echo $car[0].": In stock: ".$car[1].", sold: ".$car[2].".<br>";
}

