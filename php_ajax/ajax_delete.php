<?php
$student_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","ajax") or die("Connection Failed");

$sql = "DELETE FROM students WHERE id = {$student_id}";
$result = mysqli_query($conn,$sql) or die("SQl Query Failed");

if(mysqli_query($conn,$ql)){
    echo "1";
}else{
    echo "2";
}