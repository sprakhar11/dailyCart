<?php
   if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

   }
?>
<?php

$sql = 'SELECT * FROM product';
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<h1 style="text-align: center;">Your products</h1>

<br><br><br><br>




            <div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach ($product as $value) :  ?>
    <?php if($value['sellerId'] == $user['id']) : ?>

    <div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="<?php echo $value['imagePath'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title"><?php echo $value['name'] ?></h5>
            <p class="card-text"><?php echo $value['description'] ?></p>
            <p class="card-text">Rs.<?php echo $value['price'] ?></p>

            <button type="button" class="btn btn-warning">BuyNow</button>
          </div>
        </div>
      </a>


      <?php endif ?>

    </div>

  <?php endforeach  ?>