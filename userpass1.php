<!--login panel code-->
<?php 
session_start(); 

include "db_conn1.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM adminlogin WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: username1.php");
                exit();
            }else{
                header("Location: ADMIN.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: ADMIN.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: ADMIN.php");
    exit();
}
