<?php
include("../db.php");
include("../layout/head.php");
include("../layout/nav.php");
include("../layout/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-title">
                    <h1>Subject Create</h1>
                </div>
                <div class="card-body">
                    <form action="../_action/subject_create.php" method="POST">
                       <label for="subject_name">Subject Name</label>
                        <div class="input-group">
                            <input type="text" name="subject_name" id="" class="form-control" placeholder="">
                        </div>
                        <label for="course_id">Course Cteate_Id</label>
                        <div class="input-group">
                            <input type="text" name="course_id" id="" class="form-control" placeholder="">
                        </div>
                        <label for="created_at">Subject Cteate_At</label>
                        <div class="input-group">
                            <input type="text" name="created_at" id="" class="form-control" placeholder="">
                        </div><br>
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">Create Subject</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
