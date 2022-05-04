<?php include "./header.php" ?>

<?php
session_start();


$sql="SELECT * FROM customer  WHERE email='$email' ";

$query=mysqli_query($conn,$sql);

$user=mysqli_fetch_array($query);