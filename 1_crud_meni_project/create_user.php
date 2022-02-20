<?php include("connection.php")?>
<?php include("layouts/head.php")?>
    <body>
        <!-- Responsive navbar-->
    <?php include("layouts/nav.php")?>
        <!-- Page header with logo and tagline-->
    <?php include("layouts/header.php")?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-header"><h4 class="text-alingn-center">user create</h4></div>
                        <div class="card-body">
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="author">Name</label>
                            <input type="type" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Email</label>
                            <input type="type" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Phone</label>
                            <input type="type" name="mobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Adress</label>
                            <input type="type" name="adress" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                        <button name="create" type="name" class="btn btn-primary form-control">Submit</button>
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
        if (isset($_POST['create'])) {
            $db = mysqli_select_db($connection, 'online_class_beasic');
            $query = "INSERT INTO users ('',name, email,  mobile, dress) VALUES ('','name=$_POST[name]','email=$_POST[email]','mobile=$_POST[mobile]','adress=$_POST[adress]')";
            $query_run = mysqli_query($connection, $query);
            header("Location: user_list_index.php");
        }