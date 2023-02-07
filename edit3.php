,<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `operatingtheater` where id='$id'");
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
		font-family:georgia;
	}
	#table1{
		position: relative;
	top:-50px;
	left:500px;
	}
        .ganta{
                position:relative;
                top:5px;
	        left:110px;
			background-color:green;
				font-size:18px;
				font-family:georgia
        }
        .gantaa{
		position: relative;
	top:-30px;
	left:630px;
	font-family:georgia;
	}
</style>
</head>
<body>
	<h1>Update</h1>
	<table id="table1"; cellspacing="5%" cellpadding=5%; >
	<form method="POST" action="update3.php?id=<?php echo $id; ?>">
	<tr>
		<td> Operation Type</td>
		<td><input class=" pani" type="text" value="<?php echo $row['operation_type']; ?>" name="operation_type"></td>
		</tr>
		<br>
		<tr>
		<td> Doctor</td>
		<td><input  class=" pani" type="text" value="<?php echo $row['doctor_name']; ?>" name="doctor_name"></td>
		</tr>
		<br>
		<tr>
		<td> Staff</td>
		<td> <input  class=" pani" type="text" value="<?php echo $row['staff_name']; ?>" name="staff_name"></td>
		</tr>
		<br>
		<tr>
        <td>Patient</td>
		<td><input  class=" pani" type="text" value="<?php echo $row['patient_name']; ?>" name="patient_name"></td>
		</tr>
		<br>
		<tr>
		<td>Operation Date:</td>
		<td><input  class=" pani" type="date" value="<?php echo $row['operaton_date']; ?>" name="operaton_date"></td>
		</tr>
		<br>
		<td><input  class="ganta" type="submit" name="submit0"></td>
		
	</form>
	</table>
	<a class="gantaa" href="OPERATINGTHEATER.php">Back</a>
</body>
</html>