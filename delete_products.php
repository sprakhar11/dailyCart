<!doctype html>
<html lang="en">
<?php include "./header.php" ?>
<?php include "./config/userSession.php" ?>
<body>
    <?php include "./navbar.php"  ?>

<?php
   if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

   }
?>
<?php


if(isset($_POST['submit']))
{
    // print_r($_POST['submit']);
    // echo 'hi';

    
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

?>
<h1 style="text-align: center;">Delete products</h1>

<br><br><br><br>




            <div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach ($product as $value) :  ?>
    <?php  if($value['sellerId'] == $user['id']) : ?>
  <?php $cntProduct = $cntProduct + 1;?>


    <div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="<?php echo $value['imagePath'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title"><?php echo $value['name'] ?></h5>
            <p class="card-text"><?php echo $value['description'] ?></p>
            <p class="card-text">Rs.<?php echo $value['price'] ?></p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">

        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $value['id'] ?>">Select</button>
            
        </form>
          </div>
        </div>
      </a>


      <?php endif ?>

    </div>

  <?php endforeach  ?>

  <?php  if($cntProduct == 0) : ?>
    <h2>No Product to delete. First add. </h2>
<?php endif ?>


