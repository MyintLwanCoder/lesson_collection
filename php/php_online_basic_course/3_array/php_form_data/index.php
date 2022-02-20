<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json</title>
    <?php include ('layouts/head.php'); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2>PHP Form Data</h2>
                </div>
                <div class="card-body">
                    <form action="create.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Branch</label>
                            <input type="text" name="branch" id="branch" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Year</label>
                            <input type="text" name="year" id="year" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="">Create Json Data</button>
                        </div>
                        
            </div>
              </from>
        </div>
    </div>
    <?php include ('layouts/footer.php'); ?>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2>Json Data</h2>
                </div>
                <div class="card-body">
                    <?php
                        $json = file_get_contents('data/list.json');
                        $data = json_decode($json, true);
                    ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Brach</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['branch']; ?></td>
                                    <td><?php echo $value['year']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $key; ?>" class="btn btn-primary">Edit</a>
                                        <a href="delete.php?id=<?php echo $key; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>