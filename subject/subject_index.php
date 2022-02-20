<?php
include("../vendor/autoload.php");
include("../layout/head.php"); 
include("../layout/nav.php"); 
include("../layout/header.php"); 
use Libs\Database\MySQL;
use Libs\Database\subject;
$table = new subject(new MySQL());
$subject = $table->SubjectGetAll();
?>

<div class="container">
 <div class="row">
  <div class="col-lg-8">
   <div class="card">
    <div class="card-header"><h2>Subject Name <span><a href="subject_create_form.php" class="btn btn-primary">Subject Create</a></span></h2></div>
    <div class="card-body">
     <table class="table">
 <tr>
  <th>ID</th>
  <th>Course Name</th>
  <th>Created_at</th>
 </tr>
 <tbody>
  <?php foreach($subject as $course) : ?>
  <tr>
    <td><?= $course ->id ?></td>
    <td><?= $course ->subject_name ?></td>
    <td><?= $course ->course_id ?></td>
    <td><?= $course ->created_at ?></td>
  </tr>
  <?php endforeach ?>
 </tbody>
</table>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include("../layout/footer.php"); ?>