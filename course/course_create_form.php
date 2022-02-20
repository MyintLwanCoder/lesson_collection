<?php
include("../layout/head.php");
include("../layout/nav.php");
include("../layout/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-title">
                    <h1>Course Create</h1>
                </div>
                <div class="card-body">
                    <form action="../_action/course_create.php" method="POST">
                       <label for="course_name">Course Name</label>
                        <div class="input-group">
                            <input type="text" name="course_name" id="" class="form-control" placeholder="">
                        </div>
                        <label for="created_at">Course Cteate_At</label>
                        <div class="input-group">
                            <input type="text" name="created_at" id="" class="form-control" placeholder="">
                        </div><br>
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">Create student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
