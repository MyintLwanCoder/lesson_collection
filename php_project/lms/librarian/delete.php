<?php
require_once('../dbcon.php');

if(isset($_GET['bookdelete'])){
   $id = $_GET['bookdelete'];
   echo $id;
   mysqli_query($con, "DELETE FROM `books` WHERE `id` = '$id'");
    header('location:manage_book.php');
}
?>