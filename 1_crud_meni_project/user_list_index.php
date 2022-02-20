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
                        <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                        <!-- <div class="card-title mt-3"><a href="create_category.php" class="btn btn-primary">Create Categories</a></div> -->
                        <div class="card-title mt-3"><a href="create_user.php" class="btn btn-primary">Create Categories</a></div>
                        <div class="card-title md-3"><h1>User List</h1></div>
                        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> Adress</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                               $db = mysqli_select_db($connection, 'online_class_beasic');
                               $query = "SELECT * FROM users";
                               $query_run = mysqli_query($connection, $query);
                               while ($row = mysqli_fetch_assoc($query_run)) {
                                   ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['adress']; ?></td>
                                    <td>
                                        <a href="user_edit.php?cid=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="user_delect.php?cid=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                               <?php
                               }
                               ?>
                        <tr>
                        
                    </tbody>
                    </table>
                        </div>
                    </div>
               
                    <!-- Nested row for non-featured blog posts-->
                    
                    <!-- Pagination-->
            <?php include("layouts/pagination.php")?>
                </div>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <?php include("layouts/search_widget.php")?>
                    <!-- Categories widget-->
            <?php include("layouts/category_widget.php")?>
                   
                    <!-- Side widget-->
            <?php include("layouts/pagination.php")?>
                    
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php include("layouts/footer.php")?>