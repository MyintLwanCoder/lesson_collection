<?php
require_once('../dbcon.php');

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   echo $id;
   mysqli_query($con, "DELETE FROM `chapter_1` WHERE `id` = '$id'");
    header('location: your_answers.php');
}else
{
    echo "error";
}
?>