<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `room` where room_id='$id'");
	header('location:ROOMANDWARD.php');
?>