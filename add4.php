<?php
	include('conn.php');
 
	$roomnumber=$_POST['room_no'];
	$roomtype=$_POST['room_type'];
 
	mysqli_query($conn,"insert into `room` (room_no,room_type) values ('$roomnumber','$roomtype')");
	header('location:ROOMANDWARD.php');
 
?>