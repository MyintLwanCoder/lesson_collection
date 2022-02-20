<?php require_once('header.php')?>
<?php require_once('../dbcon.php')?>
<!-- content HEADER -->
<!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="javascript:avoid(0)">Dashboard</a></li>
                    <li><a href="student.php">Student</a></li>
                </ul>
            </div>
    </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <div class="col-am-12">
            <div class="animated fadeInRight">
                <div class="row">
                 <?php
                 $books = mysqli_query($con, "SELECT * FROM `books`");
                 $total_books = mysqli_num_rows($books);

                  $books_quty = mysqli_query($con, "SELECT SUM(`book_qty`) as total FROM `books`");
                  $qty = mysqli_fetch_assoc($books_quty);
                  $books_a_quty = mysqli_query($con, "SELECT SUM(`available_qty`) as total FROM `books`");
                  $qty_a = mysqli_fetch_assoc($books_a_quty);
                ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="manage_book.php">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-book"></i>
                                    <?php 
                                    echo $total_books .' ('.$qty['total'] .' - '.  $qty_a['total'].')';
                                    ?></h1>
                                    <h4 class="subtitle color-darker-1">Total Book</h4>
                                </div>
                            </a>
                        </div>
                    </div>
            <div class="row">
                 <?php
                 $librain = mysqli_query($con, "SELECT * FROM `librain`");
                 $total_librain = mysqli_num_rows($librain);
                        ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="#">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-users"></i><?php echo $total_librain ?></h1>
                                    <h4 class="subtitle color-darker-1">Total Librain</h4>
                                </div>
                            </a>
                        </div>
                    </div>
             <div class="row">
                 <?php
                 $studnts = mysqli_query($con, "SELECT * FROM `students`");
                 $total_studnts = mysqli_num_rows($studnts);
                        ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="panel widgetbox wbox-1 bg-lighter-2 color-light">
                            <a href="#">
                                <div class="panel-content">
                                    <h1 class="title color-darker-2"> <i class="fa fa-users"></i><?php echo $total_studnts ?></h1>
                                    <h4 class="subtitle color-darker-1">Total student</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end -->
                </div>    
            </div>
        </div>
    </div>
<?php require_once('footer.php')?>