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
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="HMS";
     $Fname=$_POST["fname"];
     $Lname=$_POST["lname"];
     $phone=$_POST["phoneNo"];
     $city=$_POST["email"];
     $mail=$_POST["username"];
     $pass=$_POST["password"];

     $conn = new mysqli($servername, $username, $password,$dbname);
    
     if($conn->connect_error){
         die("Connection failed:". $conn->connect_error);
     }
     echo "Connected Successfully";

     //Insert data
$sql = "INSERT INTO register(firstname, lastname,phone_no,city,email,pass)
VALUES ('$Fname','$Lname','$phone','$city','$mail','$pass')";

if($conn->query($sql)===TRUE){
    echo "New Record Created Successfully";
}else{
    echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();
    
    ?>
</body>
</html>