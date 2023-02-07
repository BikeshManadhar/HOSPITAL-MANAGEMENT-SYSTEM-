<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$roomnumber=$_POST['room_no'];
	$roomtype=$_POST['room_type'];
 
	mysqli_query($conn,"update `room` set room_no='$roomnumber', room_type='$roomtype' where room_id='$id'");
	header('location:ROOMANDWARD.php');
?>