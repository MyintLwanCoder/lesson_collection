<?php
//associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "Ben is " . $age['Ben'] . " years old.";
echo "<br>";
echo "Joe is " . $age['Joe'] . " years old.";
//froeach loop
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    echo '<hr>';
    echo $x . $x_value;
    echo "<br>";
}