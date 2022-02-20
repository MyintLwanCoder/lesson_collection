<?php

//PHP Return Type Declarations
function add(float $a=1.2, float $b=1.5) : float 
{
    $c = $a + $b;
    return $c;
}
echo add();

function sum(int $a, int $b) : int 
{
    $c = $a + $b;
    return $c;
}
echo sum(10,20);

function string(string $a, string $b) : string 
{
    $c = $a . $b;
    return $c;
}
echo string("Hello","World");