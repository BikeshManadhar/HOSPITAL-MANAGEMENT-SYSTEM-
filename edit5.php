<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `ward` where ward_id='$id'");
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
	top:10px;
	left:500px;
	}
        .ganta{
                position:relative;
                top:10px;
	        left:110px;
                background-color:green;
				font-size:18px;
				font-family:georgia
        }
        .gantaa{
		position: relative;
	top:50px;
	left:630px;
        font-family:georgia
	}
</style>
</head>
<body>
<h1>Update</h1>
        <table id="table1"; cellspacing="5%" cellpadding=5%; >
	<form method="POST" action="update5.php?id=<?php echo $id; ?>">
	<tr>	
	<td> Ward number:</td>
	<td><input class=" pani" type="text" value="<?php echo $row['ward_no']; ?>" name="ward_no"></td>
		</tr>
		<br>
		<tr>
		<td>Ward type:</td>
		<td><input class=" pani" type="text" value="<?php echo $row['ward_type']; ?>" name="ward_type"><td>
		</tr>
		<td><input class="ganta" type="submit" name="submit"><td>
		
	</form>
	</table>
	<a class="gantaa"  href="WARD.php">Back</a>
</body>
</html>