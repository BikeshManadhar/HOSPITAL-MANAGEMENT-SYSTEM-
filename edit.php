<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `patient` where id='$id'");
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
	top:-200px;
	left:500px;
	}
        .ganta{
                position:relative;
                top:-5px;
	        left:110px;
                background-color:green;
				font-size:18px;
				font-family:georgia
        }
        .gantaa{
		position: relative;
	top:-190px;
	left:630px;
        font-family:georgia
	}

</style>
</head>
<body>
	<h1>Update</h1>
        <table id="table1"; cellspacing="5%" cellpadding=5%; >
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
	<tr>
                      <td> Docter ID:</td>
                      <td> <input class=" pani" type="text" value="<?php echo $row['doctor_id']; ?>" name="doctor_id"></td>
           </tr>	
           <tr>
                      <td> Staff ID:</td>
                      <td> <input class=" pani" type="text" value="<?php echo $row['staff_id']; ?>" name="staff_id"></td>
           </tr>
           <tr>
                      <td> Room ID:</td>
                      <td> <input class=" pani" type="text" value="<?php echo $row['room_id']; ?>" name="room_id"></td>
           </tr>
        <tr>
                      <td> Firstname:</td>
                      <td> <input class=" pani" type="text" value="<?php echo $row['fname']; ?>" name="fname"></td>
           </tr>
           <br>
           <tr>
		<td>Lastname:</td>
                <td>  <input class=" pani" type="text" value="<?php echo $row['lname']; ?>" name="lname"></td>
                </tr>
                <br>
                <tr>
        <td>Age:</td>
        <td>    <input class=" pani" type="text" value="<?php echo $row['age']; ?>" name="age"></td>
        </tr>
        <br>
        <tr>
        <td>Address:</td>
        <td>   <input class=" pani" type="text" value="<?php echo $row['address']; ?>" name="address"></td>
        </tr>
        <br>
        <tr> 
                <td>Room number:</td>
                <td>  <input class=" pani" type="text" value="<?php echo $row['room_no']; ?>" name="room_no"></td>
        </tr>
        <br>
        <tr>
       <td>Phone number:</td>
       <td>  <input class=" pani" type="text" value="<?php echo $row['phone_no']; ?>" name="phone_no"></td> 
        </tr>
        <br>
        <tr>
       <td> Admission Date:</td>
       <td><input class=" pani" type="date" value="<?php echo $row['admission_date']; ?>" name="admission_date"></td>
        </tr>
        <br>
        <tr>
        <td>Discharge Date:</td>
        <td>  <input  class=" pani"type="date" value="<?php echo $row['discharge_date']; ?>" name="discharge_date"></td>
        </tr>
        <br>
        <tr>
       <td> Diagnosis:</td>
       <td>  <input class=" pani" type="text" value="<?php echo $row['diagnosis']; ?>" name="diagnosis"></td>
        </tr>
        <br>
        <tr>
      <td><input class=" pani" type="radio"  name="gender" value="Male"<?php echo ($row['gender']=='Male')?'checked':'';?>> Male </td>
        <br>
              <td> <input class=" pani" type="radio"  name="gender" value="Female"<?php echo ($row['gender']=='Female')?'checked':'';?>>Female </td>
                       <br>
                <td><input class=" pani" type="radio"  name="gender" value="Other"<?php echo ($row['gender']=='Other')?'checked':'';?>> Other </td>
                <br>
		</tr>
                <br>
		<tr>
                     <td><input class=" ganta" type="submit" name="submit"></td>
           </tr>
	</form>
</table>
<a class="gantaa" href="PATIENTS.php">Back</a>
</body>
</html>