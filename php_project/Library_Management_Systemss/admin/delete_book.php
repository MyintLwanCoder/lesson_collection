<?php
$connection = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connection, 'lms');
$query = "DELETE FROM books WHERE book_no = '$_GET[bn]'";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Book Deleted");
    window.location.href = 'manage_book.php';
</script>