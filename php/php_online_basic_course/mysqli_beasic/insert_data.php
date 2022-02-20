<?php
require_once ('connect.php');

$sql = "INSERT INTO tests (title, phone, description )VALUES ('John', 'Doe', 'john@example.com'),

('Myo','0960758677','test World'),
('Lin','096758677','lintu'),
('Mg','096755677','aungthu@gmail.com'),
('Ko','0976758677','Komyp@gmail.com')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo " Connect Error $conn->error";
  }