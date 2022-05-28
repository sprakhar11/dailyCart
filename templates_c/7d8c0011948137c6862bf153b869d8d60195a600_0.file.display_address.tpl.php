<?php
/* Smarty version 4.1.1, created on 2022-05-28 10:41:55
  from 'C:\xampp\htdocs\dailycart\display_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6291e053afb206_98594815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d8c0011948137c6862bf153b869d8d60195a600' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\display_address.tpl',
      1 => 1653727314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6291e053afb206_98594815 (Smarty_Internal_Template $_smarty_tpl) {
?><div >
       
          <div class="card-body">
            <h6 class="card-title">Country: <?php echo $_smarty_tpl->tpl_vars['value']->value['country'];?>
</h6>
            <h6 class="card-text">Name: <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h6>
            <h6 class="card-text">Mobile Number :<?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</h6>
            <h6 class="card-text">Pincode: <?php echo $_smarty_tpl->tpl_vars['value']->value['pincode'];?>
</h6>
            <h6 class="card-text">Address: <?php echo $_smarty_tpl->tpl_vars['value']->value['addline1'];?>
</h6>
            <h6 class="card-text">City: <?php echo $_smarty_tpl->tpl_vars['value']->value['city'];?>
</h6>
            <h6 class="card-text">State: <?php echo $_smarty_tpl->tpl_vars['value']->value['state'];?>
</h6>
            <h6 class="card-text">Type: <?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</h6>

        <form action="manage_address.php" method="POST">
        <button type="submit" class="btn btn-primary" name="submitEdit" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Edit</button>
        </form>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"> Delete </a>

    </div>
</div>
   
      
<?php }
}
