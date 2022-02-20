<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\subject;
$data = [
    "subject_name" => $_POST['subject_name'],
    "course_id" => $_POST['course_id'],
    "created_at" => $_POST['created_at'],
];

$table = new subject(new MySQL);
if($table) {
    $table->SubjectInsert($data);
    header("location: ../subject/subject_index.php");
}else{
    header("location: ../subject/subject_create_form.php");
}