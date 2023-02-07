<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `ward` where ward_id='$id'");
	header('location:WARD.php');
?>