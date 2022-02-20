<?php include("layout/head.php") ?>

<body class="">
 <div class="wrapper ">
  <?php include("layout/sidebar.php") ?>
  <div class="main-panel">
   <!-- Navbar -->
   <?php include("layout/navbar.php") ?>
   <!-- End Navbar -->
   <div class="content">
    <div class="content">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-12">
        <div class="card ">
         <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
           <i class="material-icons"></i>
          </div>
          <h4 class="card-title">Code Example Result</h4>
         </div>
         <div class="card-body ">
          <div class="row">
           <div class="col-md-6">
            <div class="table-responsive table-sales">
             <?php
                function addition()
                {
                    $str = "Hello World";
                    echo $str;
                }
                addition();
                echo "<br>";
                echo "hi";
            ?>
            </div>
           </div>
           <div class="col-md-6 ml-auto mr-auto">
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>


      <div class="row">
       <div class="col-md-12">
        <div class="card ">
         <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
           <i class="material-icons"></i>
          </div>
          <h4 class="card-title"> Example Code Here</h4>
         </div>
         <div class="card-body ">
          <div class="row">
           <div class="col-md-6">
            <div class="table-responsive table-sales">
             <!-- php code example here -->
             <?php
                $code = '
                function addition()
                {
                    $str = "Hello World";
                    echo $str;
                }
                addition();
                echo "<br>";
                echo "hi";
                ';
                echo "
                <pre>" . htmlspecialchars($code) . "</pre>";
                ?>
            </div>
           </div>
           <div class="col-md-6 ml-auto mr-auto">
            <!-- <div id="worldMap" style="height: 300px;"></div> -->
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <?php include("layout/footer.php") ?>
  </div>
 </div>
 <?php include("layout/Sidebar_Filters.php") ?>
 <!--   Core JS Files   -->
 <?php include("layout/corejs.php") ?>
</body>

</html>