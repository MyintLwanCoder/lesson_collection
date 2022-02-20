<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
    <?php foreach($errors as $errors ): ?>
      <div><?php echo $errors ?></div>
      <?php endforeach?>
  <?php endif; ?>
    </div>
    <form method="POST" enctype="multipart/form-data">
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