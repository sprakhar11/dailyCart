<?php  

session_start();


if (isset($_COOKIE['id'])) {
    unset($_COOKIE['id']); 
    setcookie('id', null, -1, '/'); 

} 
if (isset($_COOKIE['email'])) {
    unset($_COOKIE['email']); 
    setcookie('email', null, -1, '/'); 
    
} 
session_destroy();

header('Location: userDashboard.php');

?>