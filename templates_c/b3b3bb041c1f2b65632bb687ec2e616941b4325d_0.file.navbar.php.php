<?php
/* Smarty version 4.1.1, created on 2022-05-27 15:00:56
  from 'C:\xampp\htdocs\dailycart\navbar.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6290cb882878d2_04476703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b3bb041c1f2b65632bb687ec2e616941b4325d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\navbar.php',
      1 => 1653651513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290cb882878d2_04476703 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


// var_dump($_SESSION); 
require './vendor/autoload.php';
    $smarty = new Smarty();

if (!empty($_SESSION['email'])) {
    $sql="SELECT * FROM customer  WHERE email='$email' ";

    $query=mysqli_query($conn,$sql);

    $user=mysqli_fetch_array($query);
}


$smarty->assign('check', $_SESSION['email']);



$smarty->display('navbar.tpl');


<?php }
}
