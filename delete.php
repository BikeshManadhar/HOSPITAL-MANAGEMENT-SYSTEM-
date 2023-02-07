<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `patient` where id='$id'");
	header('location:PATIENTS.php');
?>