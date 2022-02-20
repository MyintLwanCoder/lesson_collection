<?php
//Magic constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";

echo __LINE__ . "<br>";
//Create directory
mkdir('test');

//Rename directory
rename('test', 'test2');

//Delete directory
rmdir('test2');

//Read files and folders insied directory
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';
//file_geit_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'Some Content');

//file_get_contents from URL
// $usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
// echo $usersJson;
// $users = json_decode($usersJson, true);
// echo '<pre>';
// var_dump($users);
// echo '</pre>';
file_exists('sample.txt'); //true
is_dir('test'); //false
?>