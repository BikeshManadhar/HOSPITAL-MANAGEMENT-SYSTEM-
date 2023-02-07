<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `staff` where staff_id='$id'");
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
	top:-160px;
	left:500px;
	}
        .ganta{
                position:relative;
                top:-5px;
	        left:150px;
			background-color:green;
				font-size:18px;
				font-family:georgia
        }
        .gantaa{
		position: relative;
	top:-150px;
	left:660px;
	font-family:georgia
	}
</style>
</head>
<body>
	<h1>Update</h1>
	<table id="table1"; cellspacing="5%" cellpadding=5%; >
	<form method="POST" action="update1.php?id=<?php echo $id; ?>">
	<tr>
		<td> First Name:</td>
		<td> <input class=" pani" type="text" value="<?php echo $row['fname']; ?>" name="fname"></td>
		</tr>
		<br>
		<tr>
		<td>Last Name</td>
		<td><input class=" pani" type="text" value="<?php echo $row['lname']; ?>" name="lname"></td>
		</tr>
		<br>
		<tr>
        <td>Age</td>
		<td><input class=" pani" type="text" value="<?php echo $row['age']; ?>" name="age"></td>
		</tr>
		<br>
		<tr>
        <td> Address</td>
		<td><input class=" pani" type="text" value="<?php echo $row['address']; ?>" name="address"></td>
		</tr>
		<br>
		<tr>
        <td>Qualification</td>
		<td><input class=" pani" type="text" value="<?php echo $row['qualification']; ?>" name="qualification"></td>
		</tr>
		<br>
		<tr>
        <td>Phone number</td>
		<td><input class=" pani" type="text" value="<?php echo $row['phone_no']; ?>" name="phone_no"></td>
		</tr>
		<br>
		<tr>
		<td> Salary</td>
		<td><input class=" pani" type="text" value="<?php echo $row['salary']; ?>" name="salary"></td>
		</tr>
		<br>
		<tr>
		<td> Email ID</td>
		<td><input class=" pani" type="text" value="<?php echo $row['email_id']; ?>" name="email_id"></td>
		</tr>
		<tr>
		<td><input class=" pani" type="radio"  name="gender" value="male"<?php echo ($row['gender']=='Male')?'checked':'';?>> Male </td>
                <br>
				<td>  <input class=" pani" type="radio"  name="gender" value="female"<?php echo ($row['gender']=='Female')?'checked':'';?>>Female </td>
                <br>
                <td><input class=" pani" type="radio"  name="gender" value="other"<?php echo ($row['gender']=='Other')?'checked':'';?>> Other </td>
				</tr>
			<br>

		<td><input class=" ganta" type="submit" name="submit"></td>
		
	</form>
	</table>
	<a class="gantaa"href="STAFF.php">Back</a>
</body>
</html>