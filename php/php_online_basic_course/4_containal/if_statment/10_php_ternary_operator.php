<!DOCTYPE html>
<html lang="en">
<head>
    <title>Using PHP Ternary Operator with isset() Function</title>
</head>
<body>

<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
echo $name;
?>

</body>
</html>