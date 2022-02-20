<?php require_once('header.php')?>
<?php require_once('../dbcon.php')?>
<!-- content HEADER -->
<!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Manage Book</a></li>
                </ul>
            </div>
    </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-sm-12">
                <h4 class="section-subtitle"><b>Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Bok Name</th>
                                        <th>Book Image</th>
                                        <th>Author Name</th>
                                        <th>Purchase Date</th>
                                        <th>Book Price</th>
                                        <th>Book Quantity</th>
                                        <th>Available Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $result = mysqli_query($con, query: "SELECT * FROM `books`");
                                          while ($row = mysqli_fetch_assoc($result)) {                                         
                                          ?>
                                        <tr>
                                                <td><?php echo $row['book_name'];?></td>
                                                <td><img src="../images/books/<?php echo $row['book_image'];?>" alt="" width="60px"></td>
                                                <td><?php echo $row['book_author_name'];?></td>
                                                <td><?php echo date('d-m-y', strtotime($row['book_purchase_date']));?></td>
                                                <td><?php echo $row['book_price'];?></td>
                                                <td><?php echo $row['book_qty'];?></td>
                                                <td><?php echo $row['available_qty'];?></td>
                                                <td>
                                                    <a href="javascript:avoid(0)" class="btn btn-info" data-toggle="modal" data-target="#book-<?php echo $row['id']?>"><i class="fa fa-eye"></i></a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#book-update<?php echo $row['id'];?>"><i class="fa fa-pencil"></i></a>
                                                    <a href="delete.php?bookdelete=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
                                                </td>
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
    $result = mysqli_query($con, query: "SELECT * FROM `books`");
    while ($row = mysqli_fetch_assoc($result)) {                                         
    ?>
    <div class="modal fade" id="book-<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Book Info</h4>
                </div>
                <div class="modal-body">
                       <table class="table table-bordered">                        
                          <tr>
                           <th>Bok Name</th>
                           <td><?php echo $row['book_name'];?></td>
                          </tr>
                          <tr>
                           <th>Book Image</th>
                           <td><img src="../images/books/<?php echo $row['book_image'];?>" alt="" width="60px"></td>
                          </tr>
                          <tr>
                          <th>Author Name</th>
                          <td><?php echo $row['book_author_name'];?></td>
                          </tr>
                          <tr>
                          <th>Purchase Date</th>
                          <td><?php echo date('d-m-y', strtotime($row['book_purchase_date']));?></td>
                          </tr>
                          <tr>
                          <th>Book Price</th>
                          <td><?php echo $row['book_price'];?></td>
                          </tr>
                          <tr>
                          <th>Book Quantity</th>
                          <td><?php echo $row['book_qty'];?></td>
                          </tr>
                          <tr>
                           <th>Available Quantity</th>
                           <td><?php echo $row['available_qty'];?></td>
                          </tr>
                       </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php 
    $result = mysqli_query($con, query: "SELECT * FROM `books`");
    while ($row = mysqli_fetch_assoc($result)) {         
    ?>
    <div class="modal fade" id="book-update<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Update Book Info</h4>
                </div>
                <div class="modal-body">
                <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="" method="POST">
                                        <h5 class="mb-lg ">Update Books</h5>
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            <input type="text" class="form-control" id="book_name" value="<?php echo $row['book_name'];?>" placeholder="Book Name">
                                            <input type="hidden" class="form-control" id="id" value="<?php echo $row['id'];?>" placeholder="Id">
                                        </div>
                                        <div class="form-group">
                                            <label>Book Image</label>
                                            <input type="file" class="form-control" id="book_image" placeholder="Book Image">
                                            <img src="../images/books/<?php echo $row['book_image'];?>" alt="" width="90px" height="90px">
                                        </div>
                                        <div class="form-group">
                                            <label>Author Name</label>
                                            <input type="text" class="form-control" id="book_author_name" value="<?php echo $row['book_author_name'];?>" placeholder="Author Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Purchase Date</label>
                                            <input type="date" class="form-control" id="book_purchase_date" value="<?php echo $row['book_purchase_date'];?>" placeholder="Purchase Date">
                                        </div>
                                        <div class="form-group">
                                            <label>Book Price</label>
                                            <input type="text" class="form-control" id="book_price" value="<?php echo $row['book_price'];?>" placeholder="Book Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Book Quantity</label>
                                            <input type="text" class="form-control" id="book_qty" value="<?php echo $row['book_qty'];?>" placeholder="Book Quantity">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Quantity</label>
                                            <input type="text" class="form-control" id="available_qty" value="<?php echo $row['available_qty'];?>" placeholder="Available Quantity">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="update-book" class="btn btn-primary"><i class="fa fa-save"></i>Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }  
    if (isset($_POST['update-book'])) {
        $id = $_POST['id'];
        $book_name = $_POST['book_name'];
        $book_image = $_FILES['book_image'];
        $book_author_name = $_POST['book_author_name'];
        $book_purchase_date = $_POST['book_purchase_date'];
        $book_price = $_POST['book_price'];
        $book_qty = $_POST['book_qty'];
        $available_qty = $_POST['available_qty'];
        $libraian_username = $_SESSION['libraian_username'];
    
        $query = "UPDATE `books` SET `book_name`='$book_name',`book_image`='$book_image',`book_author_name`='$book_author_name',`book_purchase_date`='$book_purchase_date',`book_price`='$book_price',`book_qty`='$book_qty',`available_qty`='$available_qty',`libraian_username`=$libraian_username";
        $result = mysqli_query($con, $query);
         if ($result) {
           header("location: manage_book.php");
        }
        }
    ?>
   
<?php require_once('footer.php')?>