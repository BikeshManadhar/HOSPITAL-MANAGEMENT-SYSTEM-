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
     $Age=$_POST["age"];
     $Address=$_POST["address"];
     $Roomnumber=$_POST["room_no"];
     $Phonenumber=$_POST["phone_no"];
     $Admissiondate= date('Y-m-d', strtotime($_POST['AD']));
     $Dischargedate=date('Y-m-d', strtotime($_POST['DD']));
     $Diagnosis=$_POST["diagnosis"];
     $Gender=$_POST["gender"];

     $conn = new mysqli($servername, $username, $password,$dbname);
    
     if($conn->connect_error){
         die("Connection failed:". $conn->connect_error);
     }
     echo "Connected Successfully";

     //Insert data
$sql = "INSERT INTO patient(fname, lname,age,address,room_no,phone_no,admission_date,discharge_date,diagnosis,gender)
VALUES ('$Fname','$Lname','$Age','$Address','$Roomnumber','$Phonenumber','$Admissiondate','$Dischargedate','$Diagnosis','$Gender')";

if($conn->query($sql)===TRUE){
    echo "New Record Created Successfully";
}else{
    echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();
    
    ?>
</body>
</html>