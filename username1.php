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
      
      height: 50%;
      width: 100%;
      overflow: hidden;
  }
  .hero p{
      text-align: center;
      font-size: 50px;
      color: white;
      position: relative;
      left:100px;
      top:40px;
    
  }
  .form-box{
      width: 380px;
      height: 650px;
      position: relative;
      margin: 6% auto;
      background-color:red;
      overflow: hidden;
      border-radius: 30px;
      top: -100px;
      left: -480px;
  }

  .button-box{
      width: 220px;
      margin: 35px auto;
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
      margin: 5px 0;
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
      top: -70px;  
      left: 40px;
      background: linear-gradient(to right, #ff105f, #ffad06);
      border: 0;
      outline: none;
      border-radius: 30px;	
      font-size: 16px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      
  }

  .check-box{
      margin: 30px 10px 30px 0;
      
  }
  .table{
    position: relative;
    top:-700px;
    left:400px;
    width:50%;
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
    <img src="doc.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="femaleadmin.jpg" alt="Forest" style="width:100%; height:294px">
  </div>
  <div class="column">
    <img src="doctor.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

<!--navigation bar-->
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
<!--navigation bar-->


<!--Doctor details form-->
<div class="hero">
        	<p>DOCTORS DETAILS</p>
      		<div class="form-box">
      			<div class="button-box">
      				
	      	        	<form id="login" class="input-group" action="add2.php" method="post">
	      		          	<input type="text" name="fname" class="input-field"   placeholder="First Name:"  required>
	      		          <input type="text" name="lname" class="input-field"             placeholder="Last Name:" required>
                      <input type="text" name="age" class="input-field" placeholder="Age:" required>
                     <input type="text" name="address" class="input-field" placeholder="Address:" required>
                    <input type="text" name="qualification" class="input-field"    placeholder="Qualification" required>
                    <input type="text" name="phone_no" class="input-field" placeholder="Phone Number" required>
                    <input type="text" name="salary" class="input-field" placeholder="Salary" required>
                    <input type="text" name="email_id" class="input-field" placeholder="Email ID" required>
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
	      			<button type="submit" class="submit-btn">Submit</button>
	
              </div>
              </div>
              </div>
          </form>

          <!--data retrieval from the database-->
          <div>
		<table class="table" border="1">
			<thead>
      <th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
        <th>Age</th>
        <th>Address</th>
        <th>Qualification</th>
        <th>Phone.no</th>
        <th>Salary</th>
        <th>Email ID</th>
        <th>Gender</th>
        <th>Action</th>
     
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `doctors`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
            <td><?php echo $row['id']; ?></td>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['qualification']; ?></td>
              <td><?php echo $row['phone_no']; ?></td>
              <td><?php echo $row['salary']; ?></td>
              <td><?php echo $row['email_id']; ?></td>
              <td><?php echo $row['gender']; ?></td>
							<td>
								<a style="color: #800080; font-weight:600;" href="edit2.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a style="color: #dc143c; font-weight:600;" href="delete2.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
    <a style="position:relative; top:-300px; left:600px; font-size:27px; color:blue;" href="logout.php">logout</a>
</body>
</html>
<?php 

}else{

     header("Location: LOGIN.php");

     exit();

}

 ?>