<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo(min(0, 150, 30, 20, -8, -200)); //return -200
    echo "<br>";
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    ?>
</body>
</html>