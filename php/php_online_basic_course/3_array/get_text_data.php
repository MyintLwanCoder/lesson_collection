
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Text Data From File in PHP</title>
    <?php include 'layouts/head.php';?>
</head>
<body>
    <?php $file_data = file_get_contents('data/data.txt'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Show Text Data From File in PHP</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                     <p class="card-text"><?php echo $file_data?></p>
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                </div>
            </div>
               </div>
           </div>
       </div>
<?php include 'layouts/footer.php';?>
</body>
</html>