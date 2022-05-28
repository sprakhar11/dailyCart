<?php
/* Smarty version 4.1.1, created on 2022-05-28 08:55:14
  from 'C:\xampp\htdocs\dailycart\sellerForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291c752402b06_64602798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16460cfb5446fd6f0ea4107f450cf2287b766dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\sellerForm.tpl',
      1 => 1653720913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291c752402b06_64602798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">

        <h1 style="text-align: center;">Seller Form</h1>
        <br><br><br><br><br>

        <form action="sellerForm.php" method="POST">

            <!-- <div id="emailHelp" class="form-text" style="color: red;"><?php echo '<?php'; ?>
 echo $existingMailMessage; <?php echo '?>'; ?>
</div> -->


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bussiness Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['emailErr']->value;?>
</div>


            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warehouse address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
                <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['addressErr']->value;?>
</div>

            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['formSubmitted']->value;?>
<div>

        </form>




    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"><?php echo '</script'; ?>
>
    -->
</body>

</html><?php }
}
