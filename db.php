<html>
	<head>
		<title>HOSPITAL MANAGEMENT SYSTEM</title>
		<style>
			table{
				
				position:relative;
				left:410px;
				top:-350px;
				color:black;
			}
			.insert{
				color:red;
				position:relative;
				left:700px;
				top:-325px;
				
			}
		</style>
	</head>
	<body>
		
	
<table border="5" cellpadding="0px"  >
	<tr>
    <th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Address</th>
        <th>Room Number</th>
        <th>Phone Number</th>
        <th>AdmissionDate</th>
        <th>Discharge Date</th>
        <th>Diagnosis</th>
        <th>Gender</th>
	
	</tr>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="HMS";

$conn=new mysqli($servername,$username,$password,$dbname);

$sql="select * from patient";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["address"]."</td><td>".$row["room_no"]."</td><td>".$row["phone_no"]."</td><td>".$row["admission_date"]."</td><td>".$row["discharge_date"]."</td><td>".$row["diagnosis"]."</td><td>".$row["gender"]."<br>";
		
	}
}
?>
</table>

</body>
</html>