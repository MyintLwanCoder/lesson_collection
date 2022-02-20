<?php
$student_id = $_POST['id'];
$conn = mysqli_connect("localhost","root","","ajax");
$sql = "SELECT * FROM students WHERE id = {$student_id}";
$result = mysqli_query($conn,$sql) or die("SQl Query Failed");

if(mysqli_num_rows($result) > 0 ){
    $output = '';
    while($row = mysqli_fetch_assoc($result)){
        $output.= "
        <tr>
            <td>First Name</td>
            <td><input type='text' id='edit-fname' value='{$row["first_name"]}'></td>
            <td><input type='text' id='edit-fname' hidden value='{$row["id"]}'></td>

        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' id='edit-lname' value='{$row["last_name"]}'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' id='edit-submit' value='save'></td>
        </tr>";
    }
    echo $output;

    mysqli_close($conn);
}else{
    echo "No Record Found";   
}