
<?php
include "./header.php";
include "./login_check.php";
include "./navbar.php";

   


if(isset($_POST['submitEdit']))
{
    // print_r($_POST['submit']);

    $_SESSION['editaddressid'] = $_POST['submitEdit'];
    header('Location: edit_address.php');

}

if (isset($_GET['encrypt'])) {
  $_GET['encrypt'] = urldecode($_GET['encrypt']);
  $parts = explode(':', $_GET['encrypt']);

  $method = 'AES-128-CBC';
    $encryption_key = 'myencryptionkey';
    $parts = explode(':', $_GET['encrypt']);
    $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
    $sql_delete = "DELETE FROM address WHERE id='$decrypted_id'";


    if ($conn->query($sql_delete) === TRUE) {
        // echo "Record updated successfully";
    } else {

    echo "Error updating record: " . $conn->error;
      
    }
    header("Location: manage_address.php");
    
}




$sql = 'SELECT * FROM address';
$result = mysqli_query($conn, $sql);
$address = mysqli_fetch_all($result, MYSQLI_ASSOC);
$cntAddress = 0;
$smarty->assign('address_found_message', "");
$smarty->display('manage_address.tpl');



foreach ($address as $value){
      if($value['userid'] == $user['id']){

          $smarty->assign('value', $value);

          $cntAddress = $cntAddress + 1; 

          

          $method = 'AES-128-CBC';
          $encryption_key = 'myencryptionkey';
          $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
          $data = $value['id'];


          $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
          $encrypted = $encrypted . ':' . $iv;

          
          $url = 'manage_address.php?encrypt='.urlencode($encrypted);
          $smarty->assign('url', $url);

          $smarty->display('display_address.tpl');
          
              


      }


  }

  if($cntAddress == 0){
    $smarty->assign('address_found_message', 'no address found.Please add first');
  }
  



