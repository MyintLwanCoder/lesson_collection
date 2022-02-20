<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     /**First method to associate create array. */
     $salaries = array("Mohammad" => 2000, "Qadir" => 1000, "zara" => 500);

     echo "Salary of Mohammad is " . $salaries["Mohammad"] . "<br>";
    echo "Salary of Qadir is " . $salaries["Qadir"] . "<br>";
    echo "Salary of Zara is " . $salaries["zara"] . "<br>";

    /**Second method to associate create array. */
    $salaries["Mohammad"] = "high";
    $salaries["Qadir"] = "medium";
    $salaries["zara"] = "low";

    echo "Salary of Mohammad is " . $salaries["Mohammad"] . "<br>";
    echo "Salary of Qadir is " . $salaries["Qadir"] . "<br>";
    echo "Salary of Zara is " . $salaries["zara"] . "<br>";