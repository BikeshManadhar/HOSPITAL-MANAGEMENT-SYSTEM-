<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$doctorid=$_POST['doctor_id'];
	$staffid=$_POST['staff_id'];
    $roomid=$_POST['room_id'];
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $roomno=$_POST['room_no'];
    $phoneno=$_POST['phone_no'];
    $admissiondate=$_POST['admission_date'];
    $dischargedate=$_POST['discharge_date'];
    $diagnosis=$_POST['diagnosis'];
    $gender=$_POST['gender'];
 
	mysqli_query($conn,"update `patient` set doctor_id='$doctorid', staff_id='$staffid', room_id='$roomid',fname='$firstname',lname='$lastname',age='$age', address='$address',room_no='$roomno',phone_no='$phoneno',admission_date='$admissiondate',discharge_date='$dischargedate',diagnosis='$diagnosis',gender='$gender' where id='$id'");
	header('location:PATIENTS.php');
?>