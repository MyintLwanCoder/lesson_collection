<?php
require('../dbcon.php');
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $datetime = $_POST['datetime'];
    $query = "UPDATE `accounts` SET `name`='$name',`email`='$email',`password`='$password',`datetime`='$datetime' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    if ($result) {
        header("location: data.php");
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
            <a href="data.php" class="btn btn-primary col-lg-1">Back</a>
                <div class="card-title">
                   <center> <h1>Update Accounts</h1></center>
                </div>
                <div class="card-body">
                    <?php
                    $result = mysqli_query($con, query: "SELECT * FROM `accounts`Where `id`='$_GET[update]'");
                    while ($row = mysqli_fetch_assoc($result)){
                       $id = $row['id'];
                       $name = $row['name'];
                       $email = $row['email'];
                       $password = $row['password'];
                       $datetime = $row['datetime'];
                    }
                     ?>
                    <form action="" method="POST">
                    <input type="hidden" name="id" id="" class="form-control" value="<?php echo $id ?>">
                        <div class="input-group">
                            <input type="name" name="name" id="" class="form-control" value="<?php echo $name ?>" placeholder="Enter Your Update Name" required>
                        </div><br>
                        <div class="input-group">
                            <input type="email" name="email" id="" class="form-control" value="<?php echo $email ?>" placeholder="Enter Your Update email" required>
                        </div><br>
                        <div class="input-group">
                            <input type="password" name="password" id="" class="form-control" value="<?php echo $password ?>" placeholder="Enter Your Update Password" required>
                        </div><br>
                        <div class="input-group">
                            <input type="date" name="datetime" id="" class="form-control" value="<?php echo $datetime?>" placeholder="Enter Your Update Date" required>
                        </div><br>
                        <br>
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