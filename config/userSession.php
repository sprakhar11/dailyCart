<?php 

session_start();


if(isset($_SESSION['email']))
$email=$_SESSION['email'];


    if(isset($_SESSION['email']))
    $welcomeMessage=$_SESSION['email']." welcome";

if(isset($_SESSION['email']) && isset($_SESSION['password'])){
    $sql="SELECT * FROM customer  WHERE email='$email' ";
    $query=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($query);

}
?>