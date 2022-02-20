<?php
session_start();

if (isset($_SESSION['name']));
require_once 'dbcon.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "SELECT * FROM accounts WHERE `email` = '$email'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['password'] == $password){
            $_SESSION['name'] = $row['name'];
            header("location: dashboard.php");
        }else{
            echo "<script>alert('Password is incorrect')</script>";
        }
    }else{
        echo "<script>alert('Email is incorrect')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            padding: 50px;
            background-color: rgba(12, 23, 32, 0.5);
        }
    </style>
</head>
<body>
    <div class="panel mb-none">
        <div class="panel-content bg-scale-0">
            <form method="POST">
                <h1 class="text-center">Login Form</h1>
                <h3><center><p>Please Enter your login account</p></center></h3>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Please Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please Enter Your password" required>
                </div>
                <center><h4>You Dont't have accout? <a href="index.php">Register</a></h4></center>
                    
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>