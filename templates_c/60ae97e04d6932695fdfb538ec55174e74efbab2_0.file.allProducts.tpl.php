<?php
/* Smarty version 4.1.1, created on 2022-05-28 10:17:26
  from 'C:\xampp\htdocs\dailycart\allProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291da96c94d05_29773667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ae97e04d6932695fdfb538ec55174e74efbab2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\allProducts.tpl',
      1 => 1653725845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291da96c94d05_29773667 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<body>
<h1 style="text-align: center;">Shopping</h1>

<br><br><br><br><div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    
        <div class="col">
            <div class="card h-100">
            <div class="col-md-4">
          <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['imagePath'];?>
" class="img-fluid rounded-start" alt="...">
        </div>
              <div class="card-body">
                  
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
                <p class="card-text">Rs.<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</p>
    
                <button type="button" class="btn btn-warning">BuyNow</button>
              </div>
            </div>
          </a>
        </div>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"><?php echo '</script'; ?>
>
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
