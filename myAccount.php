<?php

include "./header.php";
include "./navbar.php";
include "./login_check.php";

$smarty->assign('user', $user);


$smarty->display('myAccount.tpl');


?>
