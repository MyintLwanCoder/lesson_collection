<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\Student;
$data = [
    "name" => $_POST['name'],
    "join_date" => $_POST['join_date'],
    "bio" => $_POST['bio'],
    "room_id" => $_POST['room_id']
];

$table = new Student(new MySQL);
if($table) {
    $table->insert($data);
    header("location: ../student_index.php");
}else{
    header("location: ../student_create_form.php");
}