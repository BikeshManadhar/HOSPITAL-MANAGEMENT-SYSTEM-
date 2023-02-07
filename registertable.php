<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
</head>
<body>
    <!--Database connection-->
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
    
    // Creating a register table 
$sql="CREATE TABLE register(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone_no INT(20) NOT NULL,
    city VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass VARCHAR(30), 
    ref_date TIMESTAMP
)";
if ($conn->query($sql)===TRUE){
    echo "Table register created successfully";
}else{
    echo "Error creating table : " .$conn->error;
}
$conn->close();

//Insert data
$sql = "INSERT INTO register(firstname, lastname,phone_no,city,email,pass)
VALUES ('$Fname', '$Lname','$phone','$city','$mail','$pass')";

if($conn->query($sql)===TRUE){
    echo "New Record Created Successfully";
}else{
    echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();

    ?>
</body>
</html>