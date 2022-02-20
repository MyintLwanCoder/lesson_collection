<?php
require_once 'db_con.php';
if(isset($_POST['sing_in'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($con, "SELECT * FROM logins WHERE `email` = '$email'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if ($row['password'] == $password) {
           header("location: My_basic/index.html");
        }else{
            echo "Password is incorrect";
        }
    }else{
        $error = "Email or Username invalid";
    }
}
?>
<!doctype html>
<html lang="en" class="fixed accounts sign-in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style>
       body{
            padding: 50px;
            background-color: skyblue;
        }
    </style>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
           <h1 class="text-center">Sin UP</h1>
           <?php
           if(isset($error)){
           ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                            <input type="text" class="form-control" name="email"id="email" placeholder="Email" value="<?= isset($email) ? $email:''?>" required>
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password"value="<?= isset($password) ? $password:''?>" required>
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <center><span>Don't have an account? <a href="index.php" class="btn btn-block mt-sm">Register</a></span></center>
                        <div class="form-group">
                         <input type="submit" value="Sign in" class="btn btn-primary" name="sing_in">
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="..//vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="../javascripts/template-script.min.js"></script>
<script src="../javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>
</html>