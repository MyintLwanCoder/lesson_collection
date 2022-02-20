<?php
require('../dbcon.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $old = $_POST['old'];
    $live = $_POST['live'];
    $hobby = $_POST['hobby'];
    $food = $_POST['food'];
    $query = "UPDATE `chapter_1` SET `name`='$_POST[name]',`old`='$_POST[old]',`live`='$_POST[live]',`hobby`='$_POST[hobby]',`food`='$_POST[food]' WHERE `id`='$_POST[id]'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location: your_answers.php");
    } else {
        echo "Error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="padding: 15px;">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
            <a href="your_answers.php" class="btn btn-primary col-lg-1">Back</a>
                <div class="card-title">
                   <center> <h1>Update Accounts</h1></center>
                </div>
                <div class="card-body">
                    <?php
                    $result = mysqli_query($con, query: "SELECT * FROM `chapter_1`Where `id`='$_GET[update]'");
                    while ($row = mysqli_fetch_assoc($result)){
                       $id = $row['id'];
                       $name = $row['name'];
                       $old = $row['old'];
                       $live = $row['live'];
                       $hobby = $row['hobby'];
                       $food = $row['food'];
                      
                    }
                     ?>
                    <form action="" method="POST">
                    <input type="hidden" name="id" id="" class="form-control" value="<?php echo $id ?>">
                        <div class="input-group">
                            <input type="name" name="name" id="" class="form-control" value="<?php echo $name ?>" required>
                        </div><br>
                        <div class="input-group">
                            <input type="old" name="old" id="" class="form-control" value="<?php echo $old ?>" required>
                        </div><br>
                        <div class="input-group">
                            <input type="live" name="live" id="" class="form-control" value="<?php echo $live?>" required>
                        </div><br>
                        <div class="input-group">
                            <input type="hobby" name="hobby" id="" class="form-control" value="<?php echo $hobby?>" required>
                        </div><br>
                        <div class="input-group">
                            <input type="food" name="food" id="" class="form-control" value="<?php echo $food?>" required>
                        </div><br>
                        <div class="input-group">
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>