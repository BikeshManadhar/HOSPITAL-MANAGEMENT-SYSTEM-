

<!DOCTYPE html>

<html>

<head>

    <title>HOSPITAL MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

<style>
.d{
  position:relative;
  top:10px;
  left:300px;
  color:brown;
}
    
</style>

</head>

<body>

<div class="topnav">
<h1>AROGYA HEALTH CARE HOSPITAL</h1> 
<a class="active" href="username.php">PATIENTS</a>
  <a href="medicalhistory.php">PATIENT INVOICES</a>
  
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<h2 style="color:green; position:relative; left:170px;">
        PATIENT INVOICE
    </h2>
    <h3>
        Patient information
    </h3>
    <h3 class="d">
        Arogya healt care hospital
    </h3>
    <p>Patient Name: Sanuth</p>
    <p>Invoice Number: 12234</p>
    <p>Invoice Date: 2021 - 10 - 20</p>
    <p>Address: Kurunegala</p>
    <p>Patient Number: 0765554733</p>
    <a style="position:relative; top:-70px; left:390px; color:red; font-size:20px;" href="">Print</a>
    <div>
		<table class="table" border="1">
			<thead>
      <th>Invoice Number</th>
				<th>Medicine bill</th>
                <th>Room bill</th>
				<th>Doctor Fee</th>
        <th>Quantity</th>
        <th>Amount</th>
        <th>Action</th>
				
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `invoice`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
            <td><?php echo $row['id']; ?></td>
							<td><?php echo $row['med_bill']; ?></td>
              <td><?php echo $row['room_bill']; ?></td>
              <td><?php echo $row['doctor_bill']; ?></td>
              <td><?php echo $row['quantity']; ?></td>
              <td><?php echo $row['amount']; ?></td>
							<td>
								<a style="color: #800080; font-weight:600;"  href="edit3.php?id=<?php echo $row['id']; ?>">Add</a>
								<a style="color: #dc143c; font-weight:600;" href="delete3.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
    <a style="position:relative; top:200px; left:650px; font-size:27px; color:blue;" href="logout.php">logout</a>
</body>
</html>
    
