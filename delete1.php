<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `staff` where staff_id='$id'");
	header('location:STAFF.php');
?>