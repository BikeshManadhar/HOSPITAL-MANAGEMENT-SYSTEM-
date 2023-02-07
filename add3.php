<?php
	include('conn.php');
 
	$operationtype=$_POST['operation_type'];
	$doctor=$_POST['doctor_name'];
    $staff=$_POST['staff_name'];
    $patient=$_POST['patient_name'];
    $operationdate=$_POST['operaton_date'];
 
	mysqli_query($conn,"insert into `operatingtheater` (operation_type,doctor_name,staff_name,patient_name,operaton_date) values ('$operationtype','$doctor','$staff','$patient','$operationdate')");
	header('location:OPERATINGTHEATER.php');
 
?>