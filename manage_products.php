
<?php 
include "./header.php";
include "./login_check.php";
include "./navbar.php";


if(isset($_POST['updated'])) {
  // print_r($_POST['submit']);
  // echo 'hi';


}
if(isset($_POST['submitEdit'])) {
    // print_r($_POST['submit']);
    // echo 'hi';

    setcookie('editproductid', $_POST['editproductid'], "/", 86000* 30  );
    header('Location: edit_product.php');

}

if(isset($_POST['submit']))
{
  
    $delId = $_POST['submit'];
    $sql_delete = "DELETE FROM product WHERE id='$delId'";
    if ($conn->query($sql_delete) === TRUE) {
        // echo "Record updated successfully";
    } else {
    // echo "Error updating record: " . $conn->error;
    }


}

$sql = 'SELECT * FROM product';
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_all($result, MYSQLI_ASSOC);
$cntProduct = 0;

$smarty->display('manage_products.tpl');



   foreach  ($product as $value){
    if($value['sellerId'] == $user['id']){
     $cntProduct = $cntProduct + 1;

     $smarty->assign('value', $value);

     $smarty->display('display_products.tpl');


    
      


    }
  
  }
  

  if($cntProduct == 0){
    $smarty->assign('product_found_message', 'No Product to delete. First add. ');
  }


