<?php
/* Smarty version 4.1.1, created on 2022-05-28 09:07:54
  from 'C:\xampp\htdocs\dailycart\add_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291ca4a04e3e1_17666094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce627d00776e29d9f8879f51f046f52bd2ca0a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\add_product.tpl',
      1 => 1653721672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291ca4a04e3e1_17666094 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<div class="container">

        <h1 style="text-align: center;">Seller Register Here</h1>
        <br><br><br><br><br>

        <form action="add_product.php" method="POST" enctype="multipart/form-data">



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['descriptionErr']->value;?>
</div>
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['priceErr']->value;?>
</div>
            </div>  

            <label for="exampleInputEmail1" class="form-label">Upload Product Image </label>
            <input type="file" class="form-control" name="upload" id="">

            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['imagePathErr']->value;?>
</div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS --> -->
   
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
   
</body>

</html><?php }
}
