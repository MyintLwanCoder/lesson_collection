<?php
include_once("../dbcon.php");
session_start();
if(isset($_SESSION['student_login'])){
    header("Location: index.php");
}

if (isset($_POST['student_register'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $roll=$_POST['roll'];
    $reg=$_POST['reg'];
    $phone=$_POST['phone'];

    $input_error = array();
     if(empty($fname)){
         $input_error['fname'] = "First Name filed is required";
     }
     if(empty($lname)){
         $input_error['lname'] = "Last Name filed is required";
     }
     if(empty($email)){
         $input_error['email'] = "Email filed is required";
     }
     if(empty($username)){
         $input_error['username'] = "Username filed is required";
     }
     if(empty($password)){
         $input_error['password'] = "Password filed is required";
     }
     if(empty($roll)){
         $input_error['roll'] = "Roll filed is required";
     }
     if(empty($reg)){
         $input_error['reg'] = "Reg filed is required";
    
     }
     if(empty($phone)){
         $input_error['phone'] = "Phone filed is required";
     }
    if (count($input_error)==0) {
        $email_check = mysqli_query($con, "SELECT * FROM students WHERE email='$email'");
        $email_check_row = mysqli_num_rows($email_check);

        if ($email_check_row == 0) {
            $username_check = mysqli_query($con, "SELECT * FROM students WHERE email='$email'");
            $username_check_row = mysqli_num_rows($username_check);
            if ($username_check_row == 0) {
                if (strlen($username) >7) {
                    if (strlen($password) >=6) {
                        $password_hash=password_hash($password, algo:PASSWORD_DEFAULT);
                        $result = mysqli_query($con, query:"INSERT INTO students(`fname`, `lname`, `email`, `username`, `password`,`status`,`roll`, `reg`, `phone`) VALUES ('$fname','$lname','$email','$username','$password_hash','0','$roll','$reg','$phone')");
                        if ($result) {
                            $success = "Registration Successful";
                     
                        }else{
                               $error = "Something Wrong";
                        }
                    } else {
                        $password_error = "Password must be greater than 8 characters";
                    }
                } else {
                    $username_exists = "Username must be greater than 8 characters";
                }
            } else {
                $username_exists = "Username already exists";
            }
        } else {
            $email_exists = "This email already exists";
        }
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
           <h1 class="text-center">Register</h1>
           <?php
           if(isset($success)){
           ?>
          <div class="alert alert-success" role="alert">
            <?php echo $success; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
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
        <?php
           if(isset($email_exists)){
           ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $email_exists; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
        <?php
           if(isset($username_exists)){
           ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $username_exists; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
        <?php
           if(isset($password_error)){
           ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $password_error; ?>
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
                                <input type="text" class="form-control"placeholder="First Name" name="fname" value="<?= isset($fname) ? $fname:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php if(isset($input_error['fname'])){
                              echo "<span class='text-danger'>".$input_error['fname']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control"  placeholder="Last Name" name="lname"value="<?= isset($lname) ? $lname:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php if(isset($input_error['lname'])){
                              echo "<span class='text-danger'>".$input_error['lname']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="username" placeholder="UserName" value="<?= isset($username) ? $username:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php if(isset($input_error['username'])){
                              echo "<span class='text-danger'>".$input_error['username']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($email) ? $email:'' ?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <?php if(isset($input_error['email'])){
                              echo "<span class='text-danger'>".$input_error['email']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= isset($password) ? $password:'' ?>">
                                <i class="fa fa-key"></i>
                            </span>
                            <?php if(isset($input_error['password'])){
                              echo "<span class='text-danger'>".$input_error['password']."</span>";
                            }
                            ?>
                            <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="roll" placeholder="Roll" value="<?= isset($roll) ? $roll:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php if(isset($input_error['roll'])){
                              echo "<span class='text-danger'>".$input_error['roll']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="reg" placeholder="Reg No"value="<?= isset($reg) ? $reg:'' ?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php if(isset($input_error['reg'])){
                              echo "<span class='text-danger'>".$input_error['reg']."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="phone" placeholder="01******" value="<?= isset($phone) ? $phone:'' ?>">
                                <i class="fa fa-phone"></i>
                            </span>
                            <?php if(isset($input_error['phone'])){
                              echo "<span class='text-danger'>".$input_error['phone']."</span>";
                            }
                            ?>
                        </div>
                        </div>
                        <div class="form-group">
                            <!-- <a href="" class="btn btn-primary btn-block" >Register</a> -->
                            <input type="submit" class= "btn btn-primary btn-block" value="Register" name="student_register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="sign_in.php">Sign In</a>
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
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
<!-- SECTION script and examples-->
<!-- ========================================================= -->
</body>
</html>