<?php

$search_value = $_POST['search'];
$conn = mysqli_connect("localhost","root","","ajax");
$query = "SELECT * FROM students WHERE first_name LIKE '%$search_value%' OR last_name LIKE '%$search_value%'";
$result = mysqli_query($conn, $query);
