<!--Logout code from login panel -->
<?php 

session_start();

session_unset();

session_destroy();

header("Location: LOGIN.php");