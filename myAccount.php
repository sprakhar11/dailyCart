<?php

include "./header.php";
include "./config/userSession.php";
include "./navbar.php";



if(!isset($_COOKIE['email'])) {
header('Location: login.php?from_page=myAccount');
}

$smarty->assign('user', $user);

$smarty->display('myAccount.tpl');
include './add_address.php';
include './userProducts.php';
