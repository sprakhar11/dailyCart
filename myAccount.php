<!doctype html>
<html lang="en">
<?php

include "./header.php";
include "./config/userSession.php";
?>

<!--  no user logged in -->

<?php
   if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

   }
?>







<body>

  <?php include "./navbar.php"  ?>


<br>

<?php if(isset($user)): ?>
<?php echo 'Welcome     '; echo $user['name']; ?>
<?php if($user['profile'] == 'customer'): ?>
<a href='<?php $userId = $user['id']; echo "editProfile.php" . "?id=$userId"; ?>'>Edit Profile</a>



  <h1>You are a customer if you want to be a seller fill up the form</h1>

  <a href='<?php $userId = $user['id']; echo "sellerForm.php" . "?id=$userId"; ?>'>Form</a>
  <a href='<?php $userId = $user['id']; echo "manage_address.php" . "?id=$userId"; ?>'>Manage Address</a>

<h3>Add Address : </h3>
<?php include "./add_address.php"; ?>

<?php endif ?>
<?php endif ?>
<?php if(isset($user)): ?>
<?php if($user['profile'] == 'seller'): ?>

<h1>You are a seller : </h1>
<a href='<?php $userId = $user['id']; echo "editProfile.php" . "?id=$userId"; ?>'>Edit Profile</a>


<a href="add_product.php">Add Product</a>
<a href="delete_products.php">Delete Product</a>
<a href='<?php $userId = $user['id']; echo "manage_address.php" . "?id=$userId"; ?>'>Manage Address</a>

<h3>Add Address : </h3>
<?php include "./add_address.php"; ?>



<br>
<?php include "./userProducts.php"; ?>
<?php endif ?>
<?php endif ?>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>