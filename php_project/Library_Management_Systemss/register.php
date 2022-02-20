<?php
$connection = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connection, "lms");
$query = "INSERT INTO users values('','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[adress]')";
$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Registration successfully....You may login now.");
    window.location.href = 'login.php';
</script>