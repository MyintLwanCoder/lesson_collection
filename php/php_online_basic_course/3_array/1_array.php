<?php
//Indexed array
$array = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br>";
echo gettype($array);
echo "<br>";
foreach ($array as $value) {
    echo $value . "<br>";
}
echo "<br>";
echo "<hr>";
// Create array
$array1 = array(
    "name" => "Nguyen Van A",
    "age" => 20,
    "adress" => "Ha Noi",
    'phone' => '0987654321'
);
echo "<pre>";
print_r($array1);
echo "</pre>";
echo "<br>";
echo "<hr>";
$fruit = ['apple','banana','orange' , 'Water melon'];
echo "<pre>";
print_r($fruit);
echo "</pre>";
echo "<br>";
echo "<hr>";
echo $fruit[0] . "<br>";
foreach ($array1 as $key => $value) {
    echo $key . ": " . "<br>";
    echo  $value . "<br>";
}
//add element to array
array_unshift($fruit, 'pineapple');
echo "<pre>";
var_dump($fruit);
echo "</pre>";
echo "<br>";
echo "<hr>";

//remove element from array in the begining
array_shift($fruit);
echo "<pre>";
var_dump($fruit);
echo "</pre>";
echo "<br>";
echo "<hr>";

//split the srtin into array
$str = "Hello , I am Myint lwin";
$arr = explode(" ", $str);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";
echo gettype($arr);
echo "<br>";
echo "<hr>";
//combine array into string
$arr1 = ['Hello','I','am','Myint','lwin'];
$str1 = implode(" ", $arr1);
echo $str1;

echo "<br>";
echo "<hr>";
//check if array is empty exist
$arr2 = ['Hello','I','am','Myint','lwin'];
if (in_array('Hello',$arr2)) {
    echo "Hello is exist";
} else {
    echo "Hello is not exist";
}
echo "<br>";
echo "<hr>";
//search array
$arr3 = ['Hello','I','am','Myint','lwin'];
$key = array_search('Hello',$arr3);
echo $key;
//associative array
$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 30,
    'hobbies' => ['reading','coading','swimming'],
    'adress' => [
        'street' => 'Main street',
        'city' => 'London',
        'country' => 'Uk'
    ]
    ];
echo "<pre>";
print_r($person);
echo "</pre>";
echo "<br>";
echo "<hr>";
echo $person['name'] . "<br>";
echo $person['adress']['country'] . "<br>";
echo'<hr>';
// null colescing operator
if (isset($person['name'])) {
    echo $person['email'];
} 
$person['email'] ??='Unknow';
echo $person['email'] ?? 'Email is not exist';
// <!-- 1:13:8 --> 