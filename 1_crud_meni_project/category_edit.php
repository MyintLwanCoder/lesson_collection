<?php include("connection.php")?>
<?php
     $db =  mysqli_select_db($connection, "online_class_beasic");
     $cat_name = "";
     $cat_id = "";
     $query = "SELECT * FROM categories where cat_id = $_GET[cid]";
     $query_run = mysqli_query($connection, $query);
     while ($row = mysqli_fetch_assoc($query_run)) {
         $cat_name = $row['cat_name'];
         $cat_id = $row['cat_id'];
     }
?>
<?php include("layouts/head.php")?>
    <body>
        <!-- Responsive navbar-->
    <?php //include("layouts/nav.php")?>
        <!-- Page header with logo and tagline-->
    <?php include("layouts/header.php")?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-header"><h4 class="text-alingn-center">Categories Edit</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="Categories">Category Name</label>
                            <input type="type" value="<?php echo $cat_name; ?>" name="cat_name" class="form-control" id="category" aria-describedby="emailHelp" placeholder="Category Name">
                        </div>
                        <br>
                        <div class="form-group">
                        <button name="update" type="name" class="btn btn-primary form-control">Submit</button>
                        <a href="category_index.php" class="btn btn-danger">clean</a>
                        </div>    
                    </form>
                    </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    
                    <!-- Pagination-->
                </div>
                <!-- Side widgets-->
                <!-- <div class="col-lg-4"> -->
                    <!-- </div>  -->
                </div>
            </div>
        <!-- Footer-->
        <?php include("layouts/footer.php")?>

        <?php
        if (isset($_POST['update'])) {
            $cat_name = $_POST['cat_name'];
            $query = "UPDATE categories SET cat_name = $_POST[cat_name] WHERE cat_id = '$_GET[cid]'";
            $query_run = mysqli_query($connection, $query);
        }