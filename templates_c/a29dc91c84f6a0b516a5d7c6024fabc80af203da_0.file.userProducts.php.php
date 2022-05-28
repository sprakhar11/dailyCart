<?php
/* Smarty version 4.1.1, created on 2022-05-27 15:00:56
  from 'C:\xampp\htdocs\dailycart\userProducts.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6290cb8832acb9_77360430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29dc91c84f6a0b516a5d7c6024fabc80af203da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\userProducts.php',
      1 => 1651651923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6290cb8832acb9_77360430 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

   if(empty($_SESSION['email'])) {

    header('Location: login.php?from_page=myAccount');

   }
<?php echo '?>'; ?>

<?php echo '<?php'; ?>


$sql = 'SELECT * FROM product';
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_all($result, MYSQLI_ASSOC);

<?php echo '?>'; ?>

<h1 style="text-align: center;">Your products</h1>

<br><br><br><br>




            <div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php echo '<?php'; ?>
 foreach ($product as $value) :  <?php echo '?>'; ?>

    <?php echo '<?php'; ?>
 if($value['sellerId'] == $user['id']) : <?php echo '?>'; ?>


    <div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="<?php echo '<?php'; ?>
 echo $value['imagePath'] <?php echo '?>'; ?>
" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title"><?php echo '<?php'; ?>
 echo $value['name'] <?php echo '?>'; ?>
</h5>
            <p class="card-text"><?php echo '<?php'; ?>
 echo $value['description'] <?php echo '?>'; ?>
</p>
            <p class="card-text">Rs.<?php echo '<?php'; ?>
 echo $value['price'] <?php echo '?>'; ?>
</p>

            <button type="button" class="btn btn-warning">BuyNow</button>
          </div>
        </div>
      </a>


      <?php echo '<?php'; ?>
 endif <?php echo '?>'; ?>


    </div>

  <?php echo '<?php'; ?>
 endforeach  <?php echo '?>';
}
}
