<?php
//get mehotd
$name = $_POST['name'];

if($name == null){
    $name = 'guest';
}
$massage = $_POST['massage'];

if($massage == null){
    $massage = 'hello there';
}

echo "$name say: $massage";
?>
<form action="" method="POST">
    <input type="text" name="name">
    <input type="text" name="massage">
    <input type="submit" value="submit">
</form>