<?php
require_once('header.php');
require_once('../dbcon.php');

if (isset($_POST['save_book'])) {
    $book_name = $_POST['book_name'];
    $book_author_name = $_POST['book_author_name'];
    $book_purchase_date = $_POST['book_purchase_date'];
    $book_price = $_POST['book_price'];
    $available_qty = $_POST['available_qty'];
    $book_qty = $_POST['book_qty'];
    $libraian_username = $_SESSION['libraian_username'];

    $image =explode('.', $_FILES['book_image']['name']);
    $image_ext= end($image);
    $image = date('ymdhis.').$image_ext;

    $result = mysqli_query($con, query:"INSERT INTO `books`(`book_name`, `book_image`, `book_author_name`, `book_purchase_date`, `book_price`, `book_qty`, `available_qty`, `libraian_username`) VALUES ('$book_name','$image','$book_author_name','$book_purchase_date','$book_price','$book_qty','$available_qty','$libraian_username')");
    if ($result) {
        move_uploaded_file($_FILES['book_image']['tmp_name'], '../images/books/'.$image);
        $success = "Data Save Successfully";
    }else{
        $error = "Data not save";
    }
    }
?>
<!-- content HEADER -->
<!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Add Books</a></li>
                </ul>
            </div>
    </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            <div class="row animated fadeInUp">
                <!--BASIC-->
                <div class="col-sm-6 col-sm-offset-3">
        <?php
         if(isset($success)){
           ?>
          <div class="alert alert-success" role="alert">
            <?php echo $success; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
        <?php
           if(isset($error)){
           ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <?php
        }
        ?>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horirontal" action="" method="POST" enctype="multipart/form-data">
                                        <h5 class="md-lg">Add Book</h5>
                                        <div class="form-group">
                                            <label for="book_name" class="col-md-3 control-label">Book Name</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="book_name" class="form-control" name="book_name" id="book_name" placeholder="Book Name" required>
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="book_image" class="col-md-3 control-label">Book Image</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="file" id="book_image" name="book_image" required>
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="book_author_name" class="col-md-3 control-label">Author Name</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="text" class="form-control" id="book_author_name" name="book_author_name" placeholder="Author Name" required> 
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="book_purchase_date" class="col-md-3 control-label">Purchase Date</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="date" class="form-control" id="book_purchase_date" name="book_purchase_date" placeholder="Purchase Date" required>
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="book_price" class="col-md-3 control-label">Book Price</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="number" class="form-control" id="book_price" name="book_price" placeholder="Book Price"required>
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="book_qty" class="col-md-3 control-label">Book Quantity</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="number" class="form-control" id="book_qty" name="book_qty" placeholder="Book Quantity" required>
                                         </div><br> <br>
                                         <div class="form-group">
                                            <label for="available_qty" class="col-md-3 control-label">Available Quantity</label>
                                        </div>
                                         <div class="col-md-8">
                                            <input type="number" class="form-control" id="available_qty" name="available_qty" placeholder="Available Quantity" required>
                                         </div><br> <br>
                                        
                                        <div class="form-group">
                                            <div class="col-md-offset-3 col-md-8">
                                                <button type="submit" name="save_book" class="btn btn-primary"><i class="fa fa-save"></i> Save Book</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php require_once('footer.php')?>