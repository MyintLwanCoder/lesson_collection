<?php
include("connection.php");
$db = mysqli_select_db($connection, 'online_class_beasic');
$query = "DELETE FROM categories WHERE cat_id = '$_GET[cid]'";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Category Deleted...");
    window.location.href = "category_index.php";
</script>
