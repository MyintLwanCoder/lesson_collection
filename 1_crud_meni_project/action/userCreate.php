<?php
$connection = mysqli_connect('localhost', 'root','');
$db = mysqli_select_db($connection, 'online_class_beasic');
$query = "insert into users  values(null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[adress]')";
$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert('Registration successfully....You may login now.');
    window.location.href='../LoginFrom.php';
</script>
