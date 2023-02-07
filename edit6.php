<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `medrecord` where med_id='$id'");
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
	<form method="POST" action="update6.php?id=<?php echo $id; ?>">
	<tr>	
	<td> Medical Type:</td>
	<td><input class=" pani" type="text" value="<?php echo $row['med_type']; ?>" name="med_type"></td>
		</tr>
		<br>
		<tr>
		<td>Prescription:</td>
		<td><input class=" pani" type="text" value="<?php echo $row['prescription']; ?>" name="prescription"><td>
		</tr>
        <br>
		<tr>
		<td>Patient ID:</td>
		<td><input class=" pani" type="text" value="<?php echo $row['patient_id']; ?>" name="patient_id"><td>
		</tr>
		<td><input class="ganta" type="submit" name="submit"><td>
		
	</form>
	</table>
	<a class="gantaa"  href="MEDRECORD.php">Back</a>
</body>
</html>