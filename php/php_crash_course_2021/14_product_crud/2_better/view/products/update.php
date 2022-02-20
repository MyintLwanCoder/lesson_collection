<?php
$pdo = $pdo=new PDO("mysql:host=localhost;port=3306;dbname=products_curd", "root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$products = $statement->fetch(PDO::FETCH_ASSOC);
$errors = [];
$title = $products['title'];
$price = $products['price'];
$description = $products['description'];
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

if (!$title) {
$errors[] = 'Product title is required';
}
if (!$price) {
      $errors[] = 'Product price is required';
}

if (!is_dir('images')) {
  mkdir('images');
}

if (empty($errors)) {
$image = $_FILES['image'] ?? null;
$imagePath = $products['image'];

if ($image && $image ['tmp_name']) {

  if ($product['image']) {
    unlink($products['image']);
    
}
    $imagePath = 'images/'.randomString(8).'/'.$image['name'];
     mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'],  $imagePath);
}
$statement = $pdo->prepare("UPDATE products SET title =:title, image=:image, description=:description,price=:price WHERE id=:id");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', $imagePath);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':id', $id);
$statement->execute();
header('Location: index.php');

}
}

function randomString($n)
{
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $str = '';
   for ($i=0; $i <$n ; $i++) { 
       $index = rand(0, strlen($characters)-1);
       $str .= $characters[$index];
  }
  return $str;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../app.css">
    <title>Create Products</title>
  </head>
  <body>
      <p>
          <a href="index.php" class="btn btn-danger">Go Back to Product</a>
      </p>
    <h1>Update Product <b><?php echo $products['title']?></b></h1> 
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
    <?php foreach($errors as $errors ): ?>
      <div><?php echo $errors ?></div>
      <?php endforeach?>
  
    </div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
    <?php if($products['image']): ?>
        <img src="<?php echo $products['image']?>">
    <?php endif; ?>

    <div class="form-group">
        <label>Product Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input type="text" name="title" class="form-control"value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description" value="<?php echo $description ?>"></textarea>
    </div>
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" name="price"  value="<?php echo $price ?>"class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- viggue popstar -->

  </body>
</html>