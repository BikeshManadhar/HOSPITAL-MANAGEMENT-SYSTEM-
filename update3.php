<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$operationtype=$_POST['operation_type'];
	$doctor=$_POST['doctor_name'];
    $staff=$_POST['staff_name'];
    $patient=$_POST['patient_name'];
    $operationdate=$_POST['operaton_date'];
 
	mysqli_query($conn,"update `operatingtheater` set operation_type='$operationtype', doctor_name='$doctor', staff_name='$staff', patient_name='$patient', operaton_date='$operationdate' where id='$id'");
	header('location:OPERATINGTHEATER.php');
?>