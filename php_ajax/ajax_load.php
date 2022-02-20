<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","ajax");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("SQl Query Failed");
if(mysqli_num_rows($result) > 0 ){
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px" class="table-data">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th width="90px">Edit</th>
        <th width="90px">Delete</th>
    </tr>';
    while($row = mysqli_fetch_assoc($result)){
        $output.= "<tr><td aling='center'>{$row["id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td><td aling='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td aling='center'><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
    }
echo $output;

    echo "</table>";

    mysqli_close($conn);
}else{
    echo "No Record Found";   
}
?>
</body>
</html>