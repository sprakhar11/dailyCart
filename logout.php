<?php  

session_start();
session_destroy();

header('Location: userDashboard.php');

?>