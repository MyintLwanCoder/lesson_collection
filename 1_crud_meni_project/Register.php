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
                <div class="col-md-8" id="main_content">
        <center><h3>User Registration Form</h3></center>
        <form action="action/userCreate.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Email ID:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Mobile Number:</label>
                <input type="number" name="mobile" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <textarea rows="3" cols="40" class="form-control" name="adress"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
                <!-- Side widgets-->
                <!-- <div class="col-lg-4"> -->
                    <!-- </div>  -->
                </div>
            </div>
        <!-- Footer-->
        <?php include("layouts/footer.php")?>