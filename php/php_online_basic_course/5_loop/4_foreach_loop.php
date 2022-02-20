<?php

//for loop

$arr = array(1,2,3,4,5);
foreach($arr as $value){
    echo $value;
}

echo "<br>";
//freach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit){
    echo $i . " " . $fruit . "<br>";
}
echo "<br>";
//Interate Over Associative Array.
$person = [
    "name" => "Myint",
     "surname"=> "Lwin",
    "age" => "30",
    'hoobies' => ["Tennis", "Video game"]
];
foreach ($person as $key => $value){
    echo $key === 'hoobies';{
        break;
    }
    echo $key . " " . $value . "<br>";
}

echo "<br>";
echo "<hr>";

$eve="";
$odd="";
$arr = [1,2,3,4,5];
foreach ($value as $value){
    if($i%2==0){
        $even =$even." " . $value;
    }else{
        $odd=$odd ." " .$value;
    }
}
echo "Te eve elemen";