<!--database connection for each form for inserting, updating and deleting-->
<?php
$conn = mysqli_connect("localhost","root","","HMS");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>