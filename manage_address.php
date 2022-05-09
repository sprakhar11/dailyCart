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
    $sql_delete = "DELETE FROM address WHERE id='$delId'";
    if ($conn->query($sql_delete) === TRUE) {
        // echo "Record updated successfully";
    } else {
    // echo "Error updating record: " . $conn->error;
    }


}

$sql = 'SELECT * FROM address';
$result = mysqli_query($conn, $sql);
$address = mysqli_fetch_all($result, MYSQLI_ASSOC);
$cntAddress = 0;

?>
<h1 style="text-align: center;">Manage Address products</h1>

<br><br>




<div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach ($address as $value) :  ?>
    <?php  if($value['userid'] == $user['id']) : ?>
  <?php $cntAddress = $cntAddress + 1; ?>


    <div >
       
          <div class="card-body">
              <h5></h5>
            <h6 class="card-title">Country:<?php echo $value['country'] ?></h6>
            <h6 class="card-text">Name <?php echo $value['name'] ?></h6>
            <h6 class="card-text">Mobile Number :<?php echo $value['phone'] ?></h6>
            <h6 class="card-text">Pincode: <?php echo $value['pincode'] ?></h6>
            <h6 class="card-text">Address: <?php echo $value['addline1'] ?></h6>
            <h6 class="card-text">City: <?php echo $value['city'] ?></h6>
            <h6 class="card-text">State:<?php echo $value['state'] ?></h6>
            <h6 class="card-text">Type: <?php echo $value['type'] ?></h6>


        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST">

        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $value['id'] ?>">Delete</button>
        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $value['id'] ?>">Delete</button>
            
        </form>
          </div>
        </div>
      </a>


      <?php endif ?>

    </div>

  <?php endforeach  ?>

  <?php  if($cntAddress == 0) : ?>
    <h2>No Address to delete. First add. </h2>
<?php endif ?>


