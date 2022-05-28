<?php




$sql = 'SELECT * FROM product';
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_all($result, MYSQLI_ASSOC);

$smarty->assign('product', $product);

$smarty->display('allProducts.tpl');