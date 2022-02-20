<?php include("db.php"); ?>
<?php include("layout/head.php"); ?>
<?php include("layout/nav.php"); ?>
<?php include("layout/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-title">
                   <h1>Student Create</h1>
                </div>
                <div class="card-body">
                    <form action="_action/student_create.php" method="POST">
                        <label for="name">Student Name</label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <label for="join_date">Student Join Date</label>
                        <div class="input-group">
                            <input type="text" name="join_date" class="form-control">
                        </div>
                        <label for="bio">Student Bio</label>
                        <div class="input-group">
                            <input type="text" name="bio" class="form-control">
                        </div>
                        <label for="room_id">Student ID</label>
                        <div class="input-group">
                            <input type="text" name="room_id" class="form-control">
                        </div><br>
                        <div class="input-group">
                            <input type="submit" class="btn btn-primary" value="Create student">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layout/footer.php"); ?>