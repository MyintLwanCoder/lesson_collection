<?php

// //Create array
// $ftuits = ["Banana", "Apple", "Orange"];

// //Print the whole array
// echo'<pre>';
// var_dump($ftuits);
// echo'</pre>';
// //Get element by index
// echo $ftuits[1] . '<br>';
// //set element by index
// $ftuits[0] = "Peach";
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';

// //check if array has element at index
// isset($ftuits[3]); //false
// //Append element
// $ftuits[] = "Banana";
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';
// //Print the length of the array
// echo count($ftuits) . '<br>';

// //Add element at the end of the array
// array_push($ftuits, 'foo');
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';

// //Remove element from the end of the array
// array_pop($ftuits);
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';
// //Add element at thginning of the array
// array_unshift($ftuits, 'bar');
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';
// //Remove element from the beginning of the array
// echo array_shift($ftuits) . '<br>';

// //split the string into an array
// $string = "Banana,Apple,Peaach";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// //Combine array elements into string
// echo implode("&", $ftuits) . '<br>';

// //Check if element exit in the array
// echo "<pre>";
// var_dump(in_array('Mango', $ftuits));
// echo "</pre>";
// //Search element index in the array
// echo "<pre>";
// array_search('Apple', $ftuits); //1
// echo "</pre>";

// //Merge two arrays
// $vegetables = ["Potato","cucumber"];
// echo '<pre>';
// var_dump(array_merge($ftuits, $vegetables));
// var_dump([...$ftuits, ...$vegetables]);
// echo '</pre>'; 
// //Sorting of array (Reverse Order alse) 
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';
// rsort($ftuits);
// echo '<pre>';
// var_dump($ftuits);
// echo '</pre>';

//Create an asscociative array
$person = [
    "name" => "Brand",
    "surname" => "Traverysy",
    'age' => '23',
    "hobbies" => ['Tennis' , 'video Games']
];
echo '<pre>';
var_dump($person);
echo '</pre>';
//Get element by key
echo $person['name'] . '<br>';
//set element by key
$person['channel'] = "TraversyMedia";
echo '<pre>';
var_dump($person);
echo '</pre>';

//Null coalesing assignment operator
// if(!isset($person['adress'])){
//     echo $person['adress'] = 'Unknow';
// }
$person['address'] = $person['address'] ??='unknow';
echo '<pre>';
var_dump($person);
echo '</pre>';
//check if array has specific key

//Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
//Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
//Sorting associative arrays by value
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

//Two dimensional arrays

$todos = [
        ['title' => 'Todo title 1','completed' =>true],
        ['title' => 'Todo title 2','completed' =>false]
    ];
echo '<pre>';
var_dump($todos);
echo '</pre>';