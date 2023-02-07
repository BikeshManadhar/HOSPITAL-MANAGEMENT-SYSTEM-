<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOSPITAL MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<style>
  p{
    position:relative;
    left:-300px;
  }
    
</style>

</head>

<body>

<div class="topnav">
<h1>AROGYA HEALTH CARE HOSPITAL</h1> 
<a class="active" href="username.php">PATIENTS</a>
  <a href="medicalhistory.php">MEDICAL HISTORY</a>
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<!--patient details-->
<div class="hero">
        	<p>PATIENTS</p>
      		<div class="form-box">
      			<div class="button-box">
      				
	      		<form id="login" class="input-group" action="insert1.php" method="post">
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
					  <button type="submit" class="reset-btn">Reset</button>
              </div>
              </div>
              </div>
          </form>

          <a style="position:relative; top:-100px; left:350px; font-size:27px; color:blue;" href="logout.php">logout</a>

</body>

</html>

<?php 

}else{

     header("Location: LOGIN.php");

     exit();

}

 ?>