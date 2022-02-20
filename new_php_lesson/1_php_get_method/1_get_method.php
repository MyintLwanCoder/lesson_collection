<?php
//get mehotd
$name = $_GET['name'];

if($name == null){
    $name = 'guest';
}
$massage = $_GET['massage'];

if($massage == null){
    $massage = 'hello there';
}

echo "$name say: $massage";
?>
<form action="" method="">
    <input type="text" name="name">
    <input type="text" name="massage">
    <input type="submit" value="submit">
</form>