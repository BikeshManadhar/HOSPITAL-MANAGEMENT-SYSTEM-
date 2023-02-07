<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="HMS";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
echo "Connected Successfully";

// create table

$sql="CREATE TABLE patient(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    doctor_id INT(6) NOT NULL,
    staff_id INT(30) NOT NULL,
    room_id INT(30) NOT NULL,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
     age INT(30) NOT NULL,
    address VARCHAR(30) NOT NULL,
    room_no INT(30) NOT NULL,
    phone_no INT(30) NOT NULL,
    admission_date DATE,
    discharge_date DATE,
    diagnosis VARCHAR(30) NOT NULL,
    gender ENUM('Male','Female','Other'),
    ref_date TIMESTAMP
)";
if ($conn->query($sql)===TRUE){
    echo "Table patinet created successfully";
}else{
    echo "Error creating table : " .$conn->error;
}
$conn->close();


?>
    
</body>
</html>