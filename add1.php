<?php
	include('conn.php');
 
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $qualification=$_POST['qualification'];
    $phonenumber=$_POST['phone_no'];
    $salary=$_POST['salary'];
    $emailid=$_POST['email_id'];
    $gender=$_POST['gender'];
 
	mysqli_query($conn,"insert into `staff` (fname,lname,age,address,qualification,phone_no,salary,email_id,gender) values ('$firstname','$lastname','$age','$address','$qualification','$phonenumber','$salary','$emailid','$gender')");
	header('location:STAFF.php');
 
?>