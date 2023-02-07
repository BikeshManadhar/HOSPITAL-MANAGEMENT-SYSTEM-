<?php
	include('conn.php');
 
	$medtype=$_POST['med_type'];
	$prescription=$_POST['prescription'];
    $patientid=$_POST['patient_id'];
 
	mysqli_query($conn,"insert into `medrecord` (med_type,prescription,patient_id) values ('$medtype','$prescription','$patientid')");
	header('location:MEDRECORD.php');
 
?>