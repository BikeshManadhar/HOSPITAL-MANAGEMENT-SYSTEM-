<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style3.css">

<style>
* {
  box-sizing: border-box;
}
body{
  background-color:grey;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.hero p{
      text-align: center;
      font-size: 50px;
      color: white;
      position: relative;
      left:-430px;
    
  }
    
  /*login box*/
  body{
      background-color: gray;
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
  padding:0px;
  postion:relative;
  top:-30px;
}

  .hero{
      
      height: 100%;
      width: 100%;
      overflow: hidden; 
  }
  .hero p{
      text-align: center;
      font-size: 50px;
      color: white;
      position: relative;
    top:90px;
    left:25px;
  }
  .form-box{
      width: 300px;
      height: 800px;
      position: relative;
      margin: 6% auto;
      background-color:red;
      padding: 30px;
      overflow: hidden;
      border-radius: 30px;
      top: -55px;
      left: -520px;
  }

  .button-box{
      width: 220px;
      margin: 5px ;
      position: relative;
      border-radius: 30px;
  }
 
  ::placeholder{
	
	color: black;
	font-size:17px;
}
div,.input-group{
        position: relative;
        top: -10px;
        font-family: Georgia, 'Times New Roman', Times, serif;        
}
  .input-field{
      width: 100%;
      padding: 10px 0;
      border-left: 0;
      border-top: 0;
      border-right: 0;	
      border-bottom: 3px solid  black;
      outline: none;
      background: transparent;
      font-size: 17px;
      font-family: Georgia, 'Times New Roman', Times, serif;
  }
  .DD{
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: blue;
  }
  .gender{
   position: relative;
   left: 0px;
   margin: 5px;
   font-family: Georgia, 'Times New Roman', Times, serif;
    color: black;
  }
  .submit-btn{
      width: 65%;
      padding: 15px 30px;
      position: relative;
       top:-70px;
       left:40px;
      background: linear-gradient(to right, #ff105f, #ffad06);
      border: 0;
      outline: none;
      border-radius: 30px;	
      font-size: 16px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      
  }
  .reset-btn{
    width: 65%;
    padding: 15px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to left, #ff105f, #ffad06);
    border: 0;
    outline: none;
    border-radius: 30px;	
    position: relative;
    top: -120px;
    left: 80px;
    font-size: 16px;
    font-family: Georgia, 'Times New Roman', Times, serif;
  }
  .check-box{
      margin: 30px 10px 30px 0;
      
  }
  .table{
    width:50%;
    position: relative;
    top:-800px;
    left:300px;
    
  }


th, td {
  text-align: left;
 
}
th {
  background-color: #04AA6D;
  color: blue;
}

</style>
</head>
<body>



<div class="row">
  <div class="column">
    <img src="patient1.jpg" alt="Snow" style="width:100% ;height:293px;">
  </div>
  <div class="column">
    <img src="2.jpeg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="patient.jpg" alt="Mountains" style="width:100%">
  </div>
</div>


<div class="topnav">

<a class="active" href="username1.php">DOCTORS DETAILS</a>
<a href="PATIENTS.php">PATIENTS  DETAILS</a>
  <a href="STAFF.php">STAFF DETAILS</a>
  <a href="OPERATINGTHEATER.php">OPERATING THEATER DETAILS</a>
  <a href="ROOMANDWARD.php">ROOM DETAILS </a>
  <a href="WARD.php">WARD DETAILS</a>
  <a href="MEDRECORD.php">MEDICAL RECORD</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>


<!--patient details-->
<div class="hero">
        	<p>PATIENTS DETAILS</p>
      		<div class="form-box">
      			<div class="button-box">
      				
	      		<form id="login" class="input-group" action="add.php" method="post">
            <input type="text" name="doctor_id" class="input-field" placeholder="Doctor ID:" >
            <input type="text" name="staff_id" class="input-field" placeholder="Staff ID"  >
            <input type="text" name="room_id" class="input-field" placeholder="Room ID:" >
	      			<input type="text" name="fname" class="input-field" placeholder="First Name:"  required>
	      			<input type="text" name="lname" class="input-field" placeholder="Last Name:" required>
              <input type="text" name="age" class="input-field" placeholder="Age:" required>
              <input type="text" name="address" class="input-field" placeholder="Address:" required>
              <input type="text" name="room_no" class="input-field" placeholder="Room Number" required>
              <input type="text" name="phone_no" class="input-field" placeholder="Phone Number" required>
              <label class="DD">Admission Date</label>
                <input type="date" name="AD" class="input-field"  required style="color: black; font-size: 17px;  font-family: Georgia, 'Times New Roman', Times, serif;" >
                <label class="DD">Discharge Date</label>
                <input type="date" name="DD" class="input-field"  style="color: black; font-size: 17px;  font-family: Georgia, 'Times New Roman', Times, serif;">
              <input type="text" name="diagnosis" class="input-field" placeholder="Diagnosis" required>
              <br>
              <br>
              <label class="gender">Select Gender</label><br>
              <br>
                <input type="radio" class="gender"id="ml" name="gender" value="male">
                <span id="male"> Male </span> &nbsp;
                <br>
                <input type="radio"   class="gender" id="ml" name="gender" value="female" >
                <span id="male"> Female </span> &nbsp;
                <br>
                <input type="radio"  class="gender" id="ml" name="gender" value="other">
                <span id="male"> Others </span><br><br>

	      			<br>
					  <br>
					  <br>
          
           <br>
					  
	      			<button type="submit" class="submit-btn">Submit</button>
	
              </div>
              </div>
              </div>
          </form>

          <div>
		<table class="table" border="1">
			<thead>
      <th>ID</th>
      <th> Doctor ID</th>
      <th>Staff ID</th>
      <th>Room ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
        <th>Age</th>
        <th>Address</th>
        <th>Room.no</th>
        <th>Phone.no</th>
        <th>Admission Date</th>
        <th>Discharge Date</th>
        <th>Diagnosis</th>
        <th>Gender</th>
        <th>action</th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `patient`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['doctor_id']; ?></td>
            <td><?php echo $row['staff_id']; ?></td>
            <td><?php echo $row['room_id']; ?></td>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['room_no']; ?></td>
              <td><?php echo $row['phone_no']; ?></td>
              <td><?php echo $row['admission_date']; ?></td>
              <td><?php echo $row['discharge_date']; ?></td>
              <td><?php echo $row['diagnosis']; ?></td>
              <td><?php echo $row['gender']; ?></td>
							<td>
								<a style="color: #800080; font-weight:600;" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a style="color: #dc143c; font-weight:600;" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>

  <a style="position:relative; top:-100px; left:600px; font-size:27px; color:blue;"  href="logout.php">logout</a>
</body>
</html>
<?php 

}else{

     header("Location: LOGIN.php");

     exit();

}

 ?>