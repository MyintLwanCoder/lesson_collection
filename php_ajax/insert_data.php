<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
            <tr class="h1">
                <td id="header">
                    <h1>Add Record with PHP & Ajax</h1>
                </td>
            </tr>
            <tr>
                <td id="table-form" class="form">
                   <form id="addForm">
                        First Name : <input name="first_name" type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Last Name : <input name="last_name" type="text" id="lname">
                    <input type="button" id="save-button" value="Save">
                   </form>
                </td>
            </tr>
            <tr>
            <td id="table-data" class="table-data">
                
            </td>
            </tr>
        </table>
        <div id="error-message"></div>
        <div id="sucess-message"></div>
         <div id="modal">
             <div id="modal-form" class="modal-form"> 
                 <h2>Edit Form</h2>
                 <table cellpadding="10px" width="100%">
                 <tr>
                <td>First Name</td>
                <td><input type='text' id='edit-fname' value='{$row["first_name"]}'></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' id='edit-lname' value='{$row["last_name"]}'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' id='edit-submit' value='save'></td>
        </tr>
                 </table>
                 <div id="close-btn">X</div>
             </div>
         </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           function loadTable(){
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data){
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();
            $("#save-button").on("click",function(e){
                e.preventDefault();
                var fname = $("#fname").val();
                var lname = $("#lname").val();
                if(fname == "" || lname == ""){
                   $("#error-message").html("All fields are required.").slideDown();
                   $("#sucess-message").slideUp();
                }else{
                    $.ajax({
                        url : "ajax_insert.php",
                        type : "POST",
                        data : {first_name : fname, last_name : lname},
                        success : function(data){
                            if(data == 1){
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#error-message").slideUp();
                                $("#sucess-message").html("Data Insert Succesfully.").slideDown();
                            }else{
                                $("#error-message").html("Can't save Record").slideDown();
                                $("#sucess-message").slideUp();
                            }
                        }
                    });
                }
            });
         $(document).on("click",".delete-btn",function(){
             if(confirm("Do you Really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;
        $.ajax({
            url : "ajax_delete.php",
            type : "POST",
            data : {id : studentId},
            success : function(data){
                if(data = 1){
                    $(element).closest("tr").fadeOut();
                }else{
                    $("#error-message").html("Can't Delete Record").slideDown();
                    $("#sucess-message").slideUp();
                }
            }
          });
       }
        });
        // show Modal Box
        $(document).on("click",".edit-btn", function(){
            $("#modal").show();
            var studentId = $(this).data("eid");
            $.ajax({
                url : "load_update_form.php",
                type : "POST",
                data : {id: studentId},
                success :function(data) {
                 $("#modal-form table").html(data);

                }
            })
          });

          //Hede Modal Box
          $("#close-btn").on("click",function(){
            $("#modal").hide();
          });
        //   Save update Form
        $(document).on("click","#edit-submit",function(){
          var stuId= $("#edit-id").val();
          var fname= $("#edit-fname").val();
          var lname= $("#edit-lname").val();

          $.ajax({
              url : "load_update_form.php",
              type : "POST",
              data : {id: stuId, first_name: fname, last_name: lname},
              success : function(data){
                  if(data == 1){
                      $("#modal").hide();
                        loadTable();
                  }
              }
          })
        });
        });
    </script>
</body>
</html>