<?php
//functio with argument
function add($a, $b)
{
    $c = $a + $b;
    echo $c;
}
add(10, 20);

function familyName($name)
{
    echo "$name Myint. <br>";
}
familyName("Jani");
echo "<br>";
familyName("Hege");
echo "<br>";
familyName("Stale");
echo "<br>";
familyName("Kai Jim");
echo "<br>";
familyName("Borge");
echo "<br>";
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}
echo sum(10, 20);