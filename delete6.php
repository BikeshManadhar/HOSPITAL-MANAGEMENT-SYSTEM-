<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `medrecord` where med_id='$id'");
	header('location:MEDRECORD.php');
?>