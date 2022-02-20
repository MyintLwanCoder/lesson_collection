<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once('layouts/head.php')?>
</head>
<body>
    
<?php
  //get data from json file
  $Json_data = file_get_contents('data/color.json');
    $data = json_decode($Json_data);
?>
<h1>Display Json File Data in Table</h1>
<table class="table">
        <tr>
        <th>ID</th>
        <th>Color</th>
        <th>Value</th>
        <?php foreach($data as $key => $value){ 
                echo "<tr>";
                echo "<td>".$value->id."</td>";
                echo "<td>".$value->color."</td>";
                echo "<td>".$value->value."</td>";
            }
                ?>
    </table>

<?php require_once('layouts/footer.php')?>
</body>
</html>