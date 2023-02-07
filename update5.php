<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$wardnumber=$_POST['ward_no'];
	$wardtype=$_POST['ward_type'];
 
	mysqli_query($conn,"update `ward` set ward_no='$wardnumber', ward_type='$wardtype' where ward_id='$id'");
	header('location:WARD.php');
?>