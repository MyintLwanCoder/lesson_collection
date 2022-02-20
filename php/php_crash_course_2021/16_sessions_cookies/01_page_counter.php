<?php

session_start();

$page_counter = $_SESSION['page_counter'];
$_SESSION['page_counter'] = $_SESSION['page_counter'] + 1;
$_SESSION['page_counter']++;

if (isset($_SESSION['page_counter'] === 10)) {
    echo 'You have visited this page  times'. '<br>';
    $page_counter = $_SESSION['page_counter'];
    session_unset();
    session_destroy();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Awesome Page visited: <?php echo $page_counter ?></h1>
</body>
</html>