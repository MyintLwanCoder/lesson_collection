<?php
 require_once 'dbcon.php';
 if(isset($_POST['register'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $result = "INSERT INTO `accounts`(`id`, `name`, `email`, `password`) VALUES ('','$name','$email','$password')";
     $result = mysqli_query($con , $result);
        if($result){
            header("location: sing_up.php");
        }else{
            echo "<script>alert('Register Failed')</script>";
        }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
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
                        <h1 class="text-center">Register Form</h1>
                        <h3><center><p>Please Enter your Create a new account</p></center></h3>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="name" class="form-control" name="name" placeholder="Please Enter Your username" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Please Enter Your password" required>
                    </div>
                    <center><h4>you have accout? <a href="sing_up.php">sing up</a></h4></center>
                        
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="register" value="Register">
                    </div>
                    </form>
                </div>
            </div>
</body>
</html>