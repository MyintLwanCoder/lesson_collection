<?php include("db.php"); ?>
<?php include("head.php"); ?>
<?php include("nav.php"); ?>
<?php include("header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Data</h5>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Join_Date</th>
                            <th>Bio</th>
                            <th>Room_id</th>
                            <th>Created_At</th>
                        </tr>
                        <?php
                         $students = "SELECT * FROM students";
                         $result = mysqli_query($connection, $students);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['join_date']?></td>
                                <td><?php echo $row['bio']?></td>
                                <td><?php echo $row['room_id']?></td>
                                <td><?php echo $row['created_at']?></td>
                            </tr>
                        </tbody>
                        <?php   
                         }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("layout/footer.php"); ?>
