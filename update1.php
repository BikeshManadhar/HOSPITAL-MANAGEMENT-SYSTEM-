<?php
	include('conn.php');
	$id=$_GET['id'];
 
    $firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $qualification=$_POST['qualification'];
    $phonenumber=$_POST['phone_no'];
    $salary=$_POST['salary'];
    $emailid=$_POST['email_id'];
    $gender=$_POST['gender'];
 
	mysqli_query($conn,"update `staff` set fname='$firstname', lname='$lastname', age='$age',address='$address',qualification='$qualification',phone_no='$phonenumber',salary='$salary',email_id='$emailid',gender='$gender' where staff_id='$id'");
	header('location:STAFF.php');
?>