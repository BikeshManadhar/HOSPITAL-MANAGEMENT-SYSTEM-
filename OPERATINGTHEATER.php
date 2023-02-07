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
.topnav {
  overflow: hidden;
  background-color: #333;
  padding:0px;
  postion:relative;
  top:-30px;
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
      left:-300px;
    
  }
    
  /*login box*/
  body{
      background-color: gray;
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
    
  }
  .form-box{
      width: 380px;
      height: 450px;
      position: relative;
      margin: 6% auto;
      background-color:red;
      padding: 5px;
      overflow: hidden;
      border-radius: 30px;
      top: -55px;
      left: -300px;
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
    
  /*login box*/
  body{
      background-color: gray;
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
    
  }
  .table{
    position: relative;
    top:-400px;
    left:700px;
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
    <img src="operating2.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="4.jpg" alt="Forest" style="width:100%;height:295px;">
  </div>
  <div class="column">
    <img src="operting1.jpg" alt="Mountains" style="width:100%; height:293px;">
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
        	<p>OPRATING THEATER</p>
      		<div class="form-box">
      			<div class="button-box">
      				
	      		<form  class="input-group" action="add3.php" method="post">
	      			<input type="text" name="operation_type" class="input-field" placeholder="Operation Type"  required>
	      			<input type="text" name="doctor_name" class="input-field" placeholder="Doctor ID" required>
              <input type="text" name="patient_name" class="input-field" placeholder="Patient_ id" required>
              <input type="text" name="staff_name" class="input-field" placeholder="Staff_id" required>
              <label class="DD">Operation Date</label>
                <input type="date" name="operaton_date" class="input-field"  required style="color: black; font-size: 17px;  font-family: Georgia, 'Times New Roman', Times, serif;" >

	      			<br>
					  <br>
					  <br>
           <br>
           <br>
           <br>
           <br>

	      			<button type="submit" class="submit-btn">Submit</button>
					 
              </div>
              </div>
              </div>
          </form>

          <br>
	<div>
		<table class="table" border="1">
			<thead>
      <th>ID</th>
				<th>Operation Type</th>
				<th>Doctor</th>
        <th>Patient</th>
        <th>Staff</th>
        <th>Operation Date</th>
        <th>Action</th>
				
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `operatingtheater`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
            <td><?php echo $row['id']; ?></td>
							<td><?php echo $row['operation_type']; ?></td>
							<td><?php echo $row['doctor_name']; ?></td>
              <td><?php echo $row['patient_name']; ?></td>
              <td><?php echo $row['staff_name']; ?></td>
              <td><?php echo $row['operaton_date']; ?></td>
							<td>
								<a style="color: #800080; font-weight:600;"  href="edit3.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a style="color: #dc143c; font-weight:600;" href="delete3.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
  <a style="position:relative; top:-200px; left:600px; font-size:27px; color:blue;" href="logout.php">logout</a>
</body>

</html>
<?php 

}else{

     header("Location: LOGIN.php");

     exit();

}

 ?>


