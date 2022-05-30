<?php

    include "./header.php";
    include "login_check.php";
    include "./navbar.php";

    $sql = 'SELECT * FROM product';
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $smarty->display('userProducts.tpl');


  foreach ($product as $value) {
    if($value['sellerId'] == $user['id']){

      $smarty->assign('value', $value);
      $smarty->display('display_products.tpl');

    }
  }