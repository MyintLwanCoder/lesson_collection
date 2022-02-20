<?php 
//Print current date
echo date('Y-m-d H:i:s') . "<br>";

//print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . "<br>";

//Different format:
echo date('F j Y , H:i:s') . "<br>";
//print curren timestamp
echo time() . "<br>";
//Parse date:
$parsedDate = date_parse('2020-10-12 09:00:00');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
//parse date from format
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
?>