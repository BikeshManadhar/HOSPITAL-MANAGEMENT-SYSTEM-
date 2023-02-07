<!--code for deleting-->
<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `doctors` where id='$id'");
	header('location:username1.php');
?>