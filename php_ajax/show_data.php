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
                    <h1>PHP With Ajax</h1>
                </td>
            </tr>
            <tr>
                <td id="table-data" class="table-data">
                    <input type="button" id="load-button" value="Load Data">
                </td>
            </tr>
            <tr>
            <td id="table-load" class="table-data">
                
            </td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
                $.ajax({
                    url : "ajax_load.php",
                    type : "POST",
                    success : function(data){
                        $("#table-data").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>