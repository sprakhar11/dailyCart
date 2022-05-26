<?php
/* Smarty version 4.1.1, created on 2022-05-26 13:28:38
  from 'C:\xampp\htdocs\dailycart\edit_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_628f646661be69_63146840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713921258ea9bafed7428b244e0db39ac18cb67d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\edit_address.tpl',
      1 => 1653564500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628f646661be69_63146840 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    >

    <!-- <title>Hello, world!</title> -->
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <form action="./edit_address.php" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Country</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
" class="form-control" id="inputEmail4"
             name="country">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['countryErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Name</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputEmail4"
             name="name">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['nameErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile Number</label>
            <input type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control"
             id="exampleInputEmail1"
             aria-describedby="emailHelp" name="phone">

            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['phoneErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Pincode</label>
            <input type="number" placeholder="<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
" class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp" name="pincode">

            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['pincodeErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Address:</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['addline1']->value;?>
" class="form-control" id="inputEmail4"
            name="addline1">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['addline1Err']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">City</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" class="form-control" id="inputEmail4"
            name="city">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['cityErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">State</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
" class="form-control" id="inputEmail4" 
            name="state">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['stateErr']->value;?>
</div>

        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Type</label>
            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" class="form-control" id="inputEmail4" 
            name="type">
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['typeErr']->value;?>
</div>

        </div>
            
        
        
        
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"><?php echo '</script'; ?>
>

    
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
    crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
    crossorigin="anonymous"><?php echo '</script'; ?>
>
   
</body>

</html><?php }
}
