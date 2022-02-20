<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$conn = mysqli_connect("localhost","root","","ajax") or die("Connection Failed");

$ql = "INSERT INTO students(first_name,last_name) VALUES('{$first_name}','{$last_name}')";
// $result = mysqli_query($conn,$ql) or die("SQl Query Failed");
if (mysqli_query($conn, $ql)) {
    echo "Data Inserted Successfully";
}else{
    echo "Data Insertion Failed";
}
?>