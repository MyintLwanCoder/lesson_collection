<?php
include_once('../dbcon.php');
$result = mysqli_query($con, "SELECT * FROM  `new-entry-account` ")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print All student</title>
        <style type="text/css">
            body{
                margin: 0;
                font-family: kalpurush;
            }
            .print-area{
                width: 755px;
                height: 1050px;
                margin: auto;
                box-sizing: border-box;
                page-break-after: always;
            }
            .header, .page-info{
                text-align: center;
            }
            .header h3{
                margin: 0;
            }
            /* .data-info{
             
            } */
            .data-info table{
                width: 100%;
                border-collapse: collapse;
            }
            .data-info table th,
            .data-info table td{
                border: 1px solid #555;
                padding: 4px;
                line-height: 1em;
            }

        </style>
    </head>
    <body onload="window.print()">
        <?php //echo page_header(); 
        $sl = 1;
        $page = 1;
        $total = mysqli_num_rows($result);
        $par_page = 35;
        while($row = mysqli_fetch_assoc($result)){

           if($sl % $par_page == 1)
           echo page_header();
            ?>
         <tr>
            <td><?php echo $sl; ?></td>
            <td><?php echo $row['institute_name'] ?></td>
            <td><?php echo $row['technology_name'] ?></td>
            <td><?php echo $row['student_id'] ?></td>
            <td><?php echo $row['student_name'] ?></td>
        </tr>
        <?php
        if($sl % $par_page == 0 || $total == $par_page){
            echo page_footer($page++);
        }
        $sl++;
    }?>
    </body>
    </html>
    <?php
    function page_header() {
       $data = '
       <div class="print-area">
       <div class="header">
           <h1>Smart soft It, Pahna.</h1>
           <h3>Print All student</h3>
       </div>
       <div class="data-info">
           <table>
               <tr>
                   <th>SI No</th>
                   <th>Institute Name</th>
                   <th>Technology Name</th>
                   <th>Student Id</th>
                   <th>Student Name</th>
               </tr>
       ';
       return $data;
    }
    function page_footer($page) {
        $data = '
        </table>
                <div class="page-info">Page :- '.$page.'</div>
            </div>
        </div>';
        return $data;
     }
    ?>