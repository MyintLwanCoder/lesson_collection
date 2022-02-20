<?php
//get json data from file
$json = file_get_contents('json_data.json');
//decode json data
$data = json_decode($json, true);
//print data
echo '<pre>';
var_dump($data);
echo '</pre>';
?>
