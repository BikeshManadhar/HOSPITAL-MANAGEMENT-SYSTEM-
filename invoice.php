<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
    <style>
        body{
            width:100%;
            font-family:georgia;
        }
        .d{
           position:relative;
           top:-50px;
           left:340px;
           color:brown;
        }
    </style>
</head>
<body>
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
</body>
</html>