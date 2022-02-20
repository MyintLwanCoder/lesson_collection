<?php
// Global variable
$x = 10;
$y = 20;
$z = $x + $y;
echo $z;
echo "<br>";
echo "<hr>";
// php function
function add(){
    global $x, $y, $z;
    $z = $x + $y;
    echo $z;
}
add();
?>