<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/admin_style.css">
    </head>
    <body>

    <?php
   include("data_class.php");

$msg="";

   if (!empty($_REQUEST['msg'])) {
       $msg=$_REQUEST['msg'];
   }

if ($msg=="done") {
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
} elseif ($msg=="fail") {
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>
<body>


       <div class="container">
           <div class="innerdiv">
               <div class="row">
                   <img src="images/logo.PNG" alt="" class="imglogo">
               </div>
               <div class="leftinnerdiv">
                <Button class="greenbtn"> ADMIN</Button>
                <Button class="greenbtn" onclick="openpart('addbook')" >ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" > BOOK REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"> BOOK REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')"> ADD STUDENT</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> STUDENT REPORT</Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')"> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> ISSUE REPORT</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>
            <!-- right sidebar -->
            <div class="rightinnerdiv">
                <div id="bookrequestapprove" class="innerright portion" style="display: none;">
            <Button class="greenbtn" >BOOK REQUEST APPROVE</Button>
            </div>
           </div>
       </div>
     
        <script src="js/app.js"></script>
    </body>
</html>