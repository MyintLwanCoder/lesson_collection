<?php

//Creat simple string
// $name = "Zura";
// $string = 'Hello I am  $name. I am 28';
// $string2 = "Hello I am  $name. I am 28";
// echo $string.'<br>';
// echo $string2 .'<br>';

//string concatenation
// $string = "       Hello World   ";
// echo "1 - " . strlen($string) . '<br>';
// echo "2 - " . trim($string) . '<br>';
// echo "3 - " . ltrim($string) . '<br>';
// echo "4 - " . rtrim($string) . '<br>';
// echo "5 - " . str_word_count($string) . '<br>';
// echo "6 - " . strrev($string) . '<br>';
// echo "7 - " . strtoupper($string) . '<br>';
// echo "8 - " . strtolower($string) . '<br>';
// echo "9 - " . ucfirst('hello') . '<br>';
// echo "10 - " . lcfirst('HELLO') . '<br>';
// echo "11 - " . ucwords($string, 'world') . '<br>';
// echo "12 - " . strpos($string, 'world') . '<br>';
// echo "13 - " . stripos($string, 'World') . '<br>';
// echo "14 - " . substr($string, 8) . '<br>';
// echo "15 - " . str_replace('World','PHP',$string) . '<br>';
// echo "16 - " . str_replace('World', 'PHP', $string) . '<br>';

//Multiline text and line breaks
$longText = "
Hello, My name is Zura.
I am 27,
I love my daugther";

echo $longText.'<br>';
echo nl2br($longText).'<br>';
//multiline text and reserver html tags
$longText = "
Hello, My name is <b>Zura</b>
I am <b>27</b>,
I love my daugther";

echo "1-" . $longText.'<br>';
echo "2-" . nl2br($longText).'<br>';
echo "3-" . htmlentities($longText).'<br>';
echo "4-" . nl2br(htmlentities($longText)).'<br>';
echo html_entity_decode('&lt;b&gt;Zura&lt;/b&gt');