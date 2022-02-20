<?php

//...
// $counter = 0;
// while ($counter < 0) {
//     echo $counter . '<br>';
//     // if ($counter == 5) {
//     //     break;
//     // }
//     $counter++;
// }

//do - while
// do {
//     echo $counter . '<br>';
//     $counter++;
// } while ($counter < 0);

//for
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}
//foreach
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as  $i => $fruit) {
    echo $i.' '.$fruit. '<br>';
}
//Interate Overa associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => '30',
    'hobbies' => ['Tennis', 'Video Games']
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $value2) {
            echo $key . ': ' . $value2 . '<br>';
        }
    } else {
        echo $key . ': ' . $value . '<br>';
    }
}