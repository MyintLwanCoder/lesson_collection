<?php require_once('header.php')?>
<?php require_once('../dbcon.php')?>
<!-- content HEADER -->
<!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Return Books</a></li>
                </ul>
            </div>
    </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Return Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Phone</th>
                                        <th>Book Name</th>
                                        <th>Book Issue Date</th>
                                        <th>Return Book</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          $result = mysqli_query($con, query: "SELECT `issue_books`.`id`,`issue_books`.`book_id`,`issue_books`.`book_issue_date`,`students`.`fname`,`students`.`lname`,`students`.`roll`,`students`.`phone`,`books`.`id`,`books`.`book_name`,`books`.`book_image` FROM `issue_books` INNER JOIN `students` ON `students`.`id`=`issue_books`.`student_id` INNER JOIN `books` ON `books`.`id` = `issue_books`.`book_id` WHERE `issue_books`.`book_return_date` = ''");
                                          while ($row = mysqli_fetch_assoc($result)) {                                         
                                          ?>
                                        <tr>
                                            <td><?php echo $row['fname']. ' '.$row['lname']; ?></td>
                                            <td><?php echo $row['roll']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['book_name']; ?></td> 
                                            <td><?php echo $row['book_issue_date']; ?></td>
                                            <td><a href="return_book.php?id=<?php echo $row['id']?>&bookid=<?php echo $row['book_id']?>">Return Book</a></td>
                                        </tr>
                                       <?php } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $date = date('d-m-y');
            exit();
            $result = mysqli_query($con, "UPDATE `issue_books` SET `book_return_date`='$date' WHERE `id` = '$id'");
            if ($result) {
             mysqli_query($con, "UPDATE `books` SET `available_qty`=`available_qty`+1 WHERE `id` = '$book_id'");

                ?>
            <script>
                alert('Book Returned Successfully');
                javascript:history.go(-1);
                </script>
            <?php
            } else {
                ?>
            <script>
                alert('Something wrong');
                </script>
            <?php
            }
        }
        ?>
<?php  require_once('footer.php')?>