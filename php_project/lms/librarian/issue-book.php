<?php require_once('header.php')?>
<?php require_once('../dbcon.php')?>
<?php
if (isset($_POST['issue-book'])){
    $student_id = $_POST['student_id'];
    $book_id = $_POST['book_id'];
    $book_issue_date = $_POST['book_issue_date'];

    $result = mysqli_query($con, "INSERT INTO `issue_books`(`student_id`, `book_id`, `book_issue_date`) 
    VALUES ('$student_id','$book_id','$book_issue_date')");
    if($result){
        mysqli_query($con, "UPDATE `books` SET `available_qty`=`available_qty`-1 WHERE `id` = '$book_id'");
        ?>
        <script>
            alert('Book Issued Successfully');
            window.location.href='issue-book.php';
            </script>
        <?php
    }else{
        ?>
        <script>
            alert('Book Not Issued');
            window.location.href='issue-book.php';
            </script>
        <?php      
    }
}
?>
<!-- content HEADER -->
<!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Issue Book</a></li>
                </ul>
            </div>
    </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
    <div class="col-am-6 col-sm-offset-3">
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-inline" method="POST" action="">
                           <div class="form-group">
                             <select class="form-control" name="student_id">
                              <option value="">Select</option>
                                <?php
                                    $result = mysqli_query($con,"SELECT * FROM `students` WHERE  `status`='1'");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $row['id']?>"><?php echo $row['fname']?> <?php echo $row['lname']?> <?php echo $row['roll']?></option>
                                        <?php
                                    }
                                    ?>
                             </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="search">search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php 
                if(isset($_POST['search'])){
                   $id = $_POST['student_id'];
                   $result = mysqli_query($con,"SELECT * FROM `students` WHERE  `status` = '1'");
                   $row = mysqli_fetch_assoc($result);  ?>
                   <div class="row animated fadeInUp">
                <div class="col-sm-12 col-md-6">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label for="name">Studnet Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $row['fname']?> <?php echo $row['lname']?>" readonly>
                                            <input type="hidden" value="<?php echo $row['id'] ?>" name="student_id">
                                        </div>
                                        <div class="form-group">
                                            <label>Book Name</label>
                                        <select class="form-control" name="book_id">
                                         <option value="">Select</option>
                                            <?php
                                                $result = mysqli_query($con,"SELECT * FROM `books` WHERE  available_qty > 0");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <option value="<?php $row['id']?>"><?php echo $row['book_name']?></option>
                                                    <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Book Issue Date</label>
                                            <input type="text" class="form-control" name="book_issue_date" value="<?php echo date('d-m-Y')?>" readonly>
                                    </div>
                                        <div class="form-group">
                                            <button type="submit" name="issue-book" class="btn btn-primary">Save issue Book</button>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                }
                ?>
        </div>
    </div>
</div>
<?php require_once('footer.php')?>