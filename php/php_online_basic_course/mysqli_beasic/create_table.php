<?php
include ("connect.php");

$sql = "CREATE TABLE lists(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    phone INT(11) NOT NULL,
    description TEXT(200) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

    if ($conn->query($sql) === TRUE) {
        echo "Table lists created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();