<?php
// if statement
$time = date("Y"); // h = hour, i = minute, s = second, m = month, d = day, Y = year
if ($time <'12') {
    echo "Good morning!";
}
echo "<br>";
if ($time <'18') {
    echo "Good afternoon!";
}
echo "<br>";
if($time <'24') {
    echo "Good evening!";
}else {
    echo "Good night!";
}
echo "<br>";
$year = date("Y");
echo $year;
echo "<br>";
if ($year == '2019') {
    echo "This is 2019";
}else{
    echo 'This is 2020';
}
echo "<br>";
$day = date("d");
echo 'Today is '.$day;
echo "<br>";
if ($day == '31') {
    echo "Today is 30";
}else{
    echo "Today is not 30";
}