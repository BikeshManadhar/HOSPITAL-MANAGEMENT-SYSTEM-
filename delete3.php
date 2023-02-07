<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `operatingtheater` where id='$id'");
	header('location:OPERATINGTHEATER.php');
?>