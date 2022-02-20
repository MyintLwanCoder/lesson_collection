<?php require_once("db_con.php") ?>
<?php
if(isset($_POST['login'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = "INSERT INTO logins(`id`, `name`, `email`, `password`) VALUES ('','$name','$email','$password')";
    $result = mysqli_query($con,$result);
    if($result){
        header("location:register.php");
    }
    else{
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
    <style>
        body{
            padding: 50px;
            background-color: skyblue;
        }
    </style>
</head>
<body>
<div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="POST">
                        <h1 class="text-center">Login Form</h1>
                        <center><img src="" alt=""></center>
                        <h3><center><p>Please Enter your account</p></center></h3>
                    <div class="form-group">
                        <label>Name</label>
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
                        <input class="btn btn-primary" type="submit" name="login" value="Login">
                    </div>
                    </form>
                </div>
            </div>
</body>
</html>