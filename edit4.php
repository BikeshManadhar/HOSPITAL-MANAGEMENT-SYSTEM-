<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `room` where room_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>HOSPITAL MANAGEMENT SYSTEM</title>
<style>
	h1{
		font-family:georgia;
	}
	.pani{
		font-family:georgia;
		font-size:18px;
	}
	h1{
		text-align:center;
	}
	#table1{
		position: relative;
	top:75px;
	left:500px;
	}
        .ganta{
                position:relative;
                top:50px;
	        left:-150px;
                background-color:green;
				font-size:18px;
				font-family:georgia
        }
        .gantaa{
		position: relative;
	top:150px;
	left:690px;
        font-family:georgia
	}
</style>
</head>
<body>
<h1>Update</h1>
        <table id="table1"; cellspacing="5%" cellpadding=5%; >
	<form method="POST" action="update4.php?id=<?php echo $id; ?>">
	<tr>	
	<td> Room number:</td>
	<td><input class=" pani" type="text" value="<?php echo $row['room_no']; ?>" name="room_no"></td>
	</tr>
	<br>
	<td>Room type:</td>
	<td><input class=" pani" type="text" value="<?php echo $row['room_type']; ?>" name="room_type"></td>
	<td><input class=" ganta" type="submit" name="submit"></td>
	
	</form>
	</table>
	<a class=" gantaa" href="ROOMANDWRAD.php">Back</a>
</body>
</html>