<?php
$con = mysqli_connect("localhost","root","","library");
mysqli_query($con, query:'SET CHARACTER SET utf8');
mysqli_query($con, query:"SET SESSION collation_connection ='utf8_general_ci'");
?>