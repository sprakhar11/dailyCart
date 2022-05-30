<?php

// var_dump($_SESSION); 
// include "./login_check.php";
require './vendor/autoload.php';
$smarty = new Smarty();
$smarty->assign('check', isset($_COOKIE['id']));
$smarty->display('navbar.tpl');


