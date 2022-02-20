<?php

$age = 0;
$salary = 30000;

// //sample if 
// if($age === 20){
//     echo "1";
// }

// //Without circle braces
// if($age === 20) echo "1";

// //sample if else
// if($age === 20){
//     echo "1";
// }else{
//     echo "2";
// }
//Difference between == and ===
$age == 20; //true
$age === 20; //true

$age === 20; //true
$age == '20'; //false
//if And
if($age > 20 || $salary === 30000){
    echo "Do someting ";
}

//if DR

//Ternary if
echo $age < 22 ? "young" : "old";

//short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

//Null coalescing operator
$myName = isset($name) ? $name : 'John';    
$myName = $name ?? 'John';

//switch
$userRole = 'Webadmin';
switch($userRole){
    case 'admin':
        echo "Admin";
        break;
    case 'editor':
        echo "editor";
        break;
    case 'user':
   echo "user";
   break;
    default:
        echo "Invalid role";
        break;
}