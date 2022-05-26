<!doctype html>
<html lang="en">
<?php
include "./header.php";
include "./config/userSession.php" ?>
<body>
<?php include "./navbar.php"  ?>

<?php
   if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=xyz');

   }
   
?>
<?php


if(isset($_POST['submitEdit']))
{
    // print_r($_POST['submit']);

    $_SESSION['editaddressid'] = $_POST['submitEdit'];
    header('Location: edit_address.php');

    
    


}

if (isset($_GET['encrypt'])) {
  $_GET['encrypt'] = urldecode($_GET['encrypt']);
  // var_dump($_GET);
  $parts = explode(':', $_GET['encrypt']);
  // var_dump($parts);

  $method = 'AES-128-CBC';
    $encryption_key = 'myencryptionkey';
    $parts = explode(':', $_GET['encrypt']);
    // var_dump($parts);
    // var_dump($parts[0], $method, $encryption_key, 0, $parts[1]);
    $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
    // var_dump($decrypted_id);
    // code from hare pasted encrypted
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

?>
<h1 style="text-align: center;">Manage Address products</h1>

<br><br>




<div >

<div >

  <?php foreach ($address as $value) :  ?>
    <?php  if($value['userid'] == $user['id']) : ?>
  <?php $cntAddress = $cntAddress + 1; ?>

    <div >
       
          <div class="card-body">
            <h6 class="card-title">Country:<?php echo $value['country'] ?></h6>
            <h6 class="card-text">Name <?php echo $value['name'] ?></h6>
            <h6 class="card-text">Mobile Number :<?php echo $value['phone'] ?></h6>
            <h6 class="card-text">Pincode: <?php echo $value['pincode'] ?></h6>
            <h6 class="card-text">Address: <?php echo $value['addline1'] ?></h6>
            <h6 class="card-text">City: <?php echo $value['city'] ?></h6>
            <h6 class="card-text">State:<?php echo $value['state'] ?></h6>
            <h6 class="card-text">Type: <?php echo $value['type'] ?></h6>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">

       <a href=""></a>
        <!-- <button type="submit" class="btn btn-primary" name="submitEdit" value="<?php echo $value['id'] ?>">Edit</button> -->

        <!-- encrypt value id -->
        <?php 
          $method = 'AES-128-CBC';

          // Set the encryption key
          $encryption_key = 'myencryptionkey';
      
          // Generet a random initialisation vector
          
          $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
          // var_dump($iv);
      
          // Define the date to be encrypted
          $data = $value['id'];
      
          // var_dump("Before encryption: $data");
      
          // Encrypt the data
          $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
          $encrypted = $encrypted . ':' . $iv;

// var_dump($encrypted);
          $parts = explode(':', $encrypted);
          // var_dump($parts);
// var_dump($parts[0], $method, $encryption_key, 0, $parts[1]);
          $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
          // var_dump($decrypted_id);

        ?>

<button type="submit" class="btn btn-primary" name="submit" value="<?php echo $encrypted ?>">Delete</button>

</form>
<?php
// var_dump($encrypted);
// var_dump();
// die;
$url = 'manage_address.php?encrypt='.urlencode($encrypted);
echo "<a href='$url'>DELETE</a>";
?>

          </div>
        </div>
      </a>


      <?php endif ?>

    </div>

  <?php endforeach  ?>

  <?php  if($cntAddress == 0) : ?>
    <h2>No Address to delete. First add. </h2>
<?php endif ?>


