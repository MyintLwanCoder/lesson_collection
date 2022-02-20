<?php
session_start();
error_reporting(0);
if (isset($_SESSION['name']));
?>
<div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
    CT
   </a>
   <a href="http://www.creative-tim.com" class="simple-text logo-normal">
    Creative Tim
   </a>
  </div>
  <div class="sidebar-wrapper">
   <div class="user">
    <div class="photo">
      <img src="assets/img/faces/avatar.jpg" />
    </div>
    <div class="user-info">
     <a data-toggle="collapse" href="#collapseExample" class="username">
      <span>
      <?php echo $_SESSION['name']; ?>
       <b class="caret"></b>
      </span>
     </a>
     <div class="collapse" id="collapseExample">
      <ul class="nav">
       <li class="nav-item">
        <a class="nav-link" href="#">
         <span class="sidebar-mini"> MP </span>
         <span class="sidebar-normal"> My Profile </span>
        </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="#">
         <span class="sidebar-mini"> EP </span>
         <span class="sidebar-normal"> Edit Profile </span>
        </a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="#">
         <span class="sidebar-mini"> S </span>
         <span class="sidebar-normal"> Settings </span>
        </a>
       </li>
      </ul>
     </div>
    </div>
   </div>
   <ul class="nav">
    <li class="nav-item active ">
     <a class="nav-link" href="dashboard.php">
      <i class="material-icons">dashboard</i>
      <p> Dashboard </p>
     </a>
    </li>
    <li class="nav-item ">
     <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
      <i class="material-icons">persons</i>
      <p> Account
       <b class="caret"></b>
      </p>
     </a>
     <div class="collapse" id="pagesExamples">
      <ul class="nav">
       <li class="nav-item ">
        <a class="nav-link" href="login.php">
         <span class="sidebar-mini"> LP </span>
         <span class="sidebar-normal"> Login Page </span>
        </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="index.php">
         <span class="sidebar-mini"> RP </span>
         <span class="sidebar-normal"> Register Page </span>
        </a>
       </li>
       <!-- <li class="nav-item ">
        <a class="nav-link" href="lock.php">
         <span class="sidebar-mini"> LSP </span>
         <span class="sidebar-normal"> Lock Screen Page </span>
        </a>
       </li> -->
       <li class="nav-item ">
        <a class="nav-link" href="logout.php">
         <span class="sidebar-mini"> L </span>
         <span class="sidebar-normal">Logout</span>
        </a>
       </li>
      </ul>
     </div>
    </li>
    <li class="nav-item ">
     <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
      <i class="material-icons">people</i>
      <p> Grade 4
       <b class="caret"></b>
      </p>
     </a>
     <div class="collapse" id="componentsExamples">
      <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="Grade_4/chapter_1.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 1 </span>
        </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="Grade_4/chapter_2.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 2 </span>
        </a>
       </li>
      </ul>
     </div>
    </li>
    <li class="nav-item ">
     <a class="nav-link" data-toggle="collapse" href="#lwin">
      <i class="material-icons">people</i>
      <p> Grade 5
       <b class="caret"></b>
      </p>
     </a>
     <div class="collapse" id="lwin">
      <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="Grade_5/chapter_1.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 1 </span>
        </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="Grade_5/chapter_2.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 2 </span>
        </a>
       </li>
      </ul>
     </div>
    </li>
    <li class="nav-item ">
     <a class="nav-link" data-toggle="collapse" href="#Myint">
      <i class="material-icons">people</i>
      <p> Grade 6
       <b class="caret"></b>
      </p>
     </a>
     <div class="collapse" id="Myint">
      <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="Grade_6/chapter_1.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 1 </span>
        </a>
       </li>
       <li class="nav-item ">
        <a class="nav-link" href="Grade_6/chapter_2.php">
         <span class="sidebar-mini"> C </span>
         <span class="sidebar-normal"> Chapter 2 </span>
        </a>
       </li>
      </ul>
     </div>
    </li>
    <li class="nav-item ">
     <a class="nav-link" data-toggle="collapse" href="#Yon">
      <i class="material-icons">grid_on</i>
      <p>Database
       <b class="caret"></b>
      </p>
     </a>
     <div class="collapse" id="Yon">
      <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link" href="../Database/data.php">
         <span class="sidebar-mini"> D </span>
         <span class="sidebar-normal"> Data </span>
        </a>
       </li>
      </ul>
     </div>
    </li>
  </div>
 </div>