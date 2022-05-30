<?php
/* Smarty version 4.1.1, created on 2022-05-30 12:47:03
  from 'C:\xampp\htdocs\dailycart\display_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6294a0a7d80c74_93266560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e039821af1ce2ee0494eb09e408080ea4c6f730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\display_products.tpl',
      1 => 1653907592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294a0a7d80c74_93266560 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
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
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
</p>
        <form action="edit_product.php" method="POST">
        <button type="submit" class="btn btn-primary" name="submitEdit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Edit</button>
        </form>

        <form action="manage_products.php" method="POST">

        <button type="submit" class="btn btn-primary" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Delete</button>
        </form>
            
        </form>
          </div>
        </div>
</div><?php }
}
