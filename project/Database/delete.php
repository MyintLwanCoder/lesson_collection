<?php
require_once('../dbcon.php');

if(isset($_GET['delete-btn'])){
   $id = $_GET['delete-btn'];
   echo $id;
   mysqli_query($con, "DELETE FROM `accounts` WHERE `id` = '$id'");
    header('location: data.php');
}
?>