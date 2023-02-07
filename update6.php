<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$medtype=$_POST['med_type'];
	$prescription=$_POST['prescription'];
$patientid=$_POST['patient_id'];
 
	mysqli_query($conn,"update `medrecord` set med_type='$medtype', prescription='$prescription', patient_id='$patientid' where med_id='$id'");
	header('location:MEDRECORD.php');
?>