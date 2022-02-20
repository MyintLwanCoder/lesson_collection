<?php

//what is a variable

//variable types
/*  
    -string
    -integer
    -float
    -boolean
    -null
    -array
    -object
    -resource
    */

    //Declare variables
$name = "Zura";
$age = 28;
$isMale = true ;
$height = 1.85;
$salary = null ;


//prin the variables. Explain what is
echo $name . "<br>";
echo $age . "<br>";; 
echo $isMale . "<br>";
echo $height . "<br>";
echo $salary . "<br>";
//print types of the variables
echo gettype($name) .'<br>';
echo gettype($age) .'<br>';
echo gettype($isMale) .'<br>';
echo gettype($height) .'<br>';
echo gettype($salary) .'<br>';
//print the whole variable
var_dump($name , $age , $isMale , $height , $salary);
//change the value of the variable
$name = "false";
//print type of the variable
echo gettype($name) .'<br>';

//variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

//check if variable is defined
isset($name); // true
isset($adress); // true
//Constants
define("PI", 3.14);
echo PI . "<br>";

//Using PHP built-in constants

echo SORT_ASC . "<br>";
echo PHP_INT_MAX . "<br>";