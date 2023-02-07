<?php
	include('conn.php');
    $doctorid=$_POST['doctor_id'];
    $staffid=$_POST['staff_id'];
    $roomid=$_POST['room_id'];
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $roomnumber=$_POST['room_no'];
    $phonenumber=$_POST['phone_no'];
    $AD=$_POST['AD'];
    $DD=$_POST['DD'];
    $diagnosis=$_POST['diagnosis'];
    $gender=$_POST['gender'];
 
	mysqli_query($conn,"insert into `patient` (doctor_id,staff_id,room_id,fname,lname,age,address,room_no,phone_no,admission_date,discharge_date,diagnosis,gender) values ('$doctorid','$staffid','$roomid','$firstname','$lastname','$age','$address','$roomnumber','$phonenumber','$AD','$DD','$diagnosis','$gender')");
	header('location:PATIENTS.php');
 
?>