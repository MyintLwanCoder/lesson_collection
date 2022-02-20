<?php
require_once '../dbcon.php';
session_start();
if(isset($_SESSION['libraian_login'])){
    header("Location: login.php");
}
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $result = mysqli_query($con, "SELECT * FROM `librain` WHERE `email` = '$email' OR `username`='$email'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if( $row['password'] == $password){
            $_SESSION['libraian_login'] = $email;
            $_SESSION['libraian_username'] = $row['username'];
           header('location: index.php');
        }else{
          $error = "Password  invalid";
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
    <title>LMS</title>
    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../stylesheets/css/style.css">
</head>

<body>
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
                            <input type="text" class="form-control" name="email"id="email" placeholder="Email" value="<?= isset($email) ? $email:''?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password"value="<?= isset($Password) ? $Password:''?>">
                                <i class="fa fa-key"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Sign in" class="btn btn-primary btn-block" name="login">
                        </div>
                        <div class="form-group text-center">
                            <a href="forgot_password.php">Forgot password?</a>
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
