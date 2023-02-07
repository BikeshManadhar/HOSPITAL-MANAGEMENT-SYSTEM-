<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
</head>
<body>

<?php
//database connection
$servername="localhost";
$username="root";
$password="";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
echo "Connected Successfully";

//Creating a database
$sql = "CREATE DATABASE HMS";
if ($conn->query($sql) ===TRUE){
    echo"Database created succuessfully";
}else{
    echo "Error creating database";
}



?>  
</body>
</html>