<?php
/* Smarty version 4.1.1, created on 2022-05-27 12:12:29
  from 'C:\xampp\htdocs\dailycart\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6290a40d165fa9_85074519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13d2b6ed6e30ef32d96d4cb0ebb607eef6ceb1a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dailycart\\login.tpl',
      1 => 1653646340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.php' => 1,
  ),
),false)) {
function content_6290a40d165fa9_85074519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['loginmessage']->value;?>
</h1>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <br><br><br>
    <br><br><br><br><br>

    <center><h1 >Login</h1></center>
    
    <div class="container" >

        <form action="./login.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!-- <div class="form-group form-check"> -->
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            <!-- </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <div id="emailHelp" class="form-text"><?php echo $_smarty_tpl->tpl_vars['errMessage']->value;?>
</div>

            <!-- <button type="submit" action="" class="btn btn-primary">Submit</button> -->
        </form>

        <br>
        <button type="submit" class="btn btn-primary">

            <a href="signup.php" style="color: white;text-decoration:none">Signup</a>
        </button>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
