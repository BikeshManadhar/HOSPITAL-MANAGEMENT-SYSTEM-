<?php
	include('conn.php');
 
	$wardnumber=$_POST['ward_no'];
	$wardtype=$_POST['ward_type'];
 
	mysqli_query($conn,"insert into `ward` (ward_no,ward_type) values ('$wardnumber','$wardtype')");
	header('location:WARD.php');
 
?>