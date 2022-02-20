<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$query = "update users set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',adress='$_POST[adress]'";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "users_dashboard.php";
</script>