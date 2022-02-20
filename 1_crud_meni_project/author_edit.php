<?php include("connection.php")?>
<?php
     $db =  mysqli_select_db($connection, "online_class_beasic");
     $author_name = "";
     $author_id = "";
     $query = "SELECT * FROM authors where author_id = $_GET[cid]";
     $query_run = mysqli_query($connection, $query);
     while ($row = mysqli_fetch_assoc($query_run)) {
         $author_name = $row['author_name'];
         $author_id = $row['author_id'];
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
                        <div class="card-header"><h4 class="text-alingn-center">Author Edit</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="author">Author Name</label>
                            <input type="type" value="<?php echo $author_name; ?>" name="author_name" class="form-control"  placeholder="Author Name">
                        </div>
                        <br>
                        <div class="form-group">
                        <button name="update" type="name" class="btn btn-primary form-control">Submit</button>
                        <a href="author_index.php" class="btn btn-danger">clean</a>
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
            $author_name = $_POST['author_name'];
            $query = "UPDATE outhors SET author_name = $_POST[author_name] WHERE author_id = '$_GET[cid]'";
            $query_run = mysqli_query($connection, $query);
            header('location: author_index.php');
        }