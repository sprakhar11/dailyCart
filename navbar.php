<?php

// var_dump($_SESSION); 
require './vendor/autoload.php';
$smarty = new Smarty();

if (isset($_SESSION['email'])) {
    $sql="SELECT * FROM customer  WHERE email='$email' ";

    $query=mysqli_query($conn,$sql);

    $user=mysqli_fetch_array($query);
}


$smarty->assign('check', isset($_SESSION['email']));



$smarty->display('navbar.tpl');


