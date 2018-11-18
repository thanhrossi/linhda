<?php
/* Smarty version 3.1.32, created on 2018-11-18 02:47:14
  from 'C:\xampp\htdocs\sushikai\presentation\templates\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0c4a2ac3b46_59521728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2f57e71e9bd268812ecca697ec5fa909408851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\admin_login.tpl',
      1 => 1542041332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0c4a2ac3b46_59521728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_login",'assign'=>"obj"),$_smarty_tpl);?>

<div class="login">
  <h3 class="login-title">Login</h3>
  <div class="row">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">
    <div class="col-md-12">
      <p>
        Enter login information or go back to
        <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToIndex;?>
">storefront</a>.
      </p>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLoginMessage != '') {?>
        <p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLoginMessage;?>
</p>
    <?php }?>
        <p>
          <label for="username">Username:</label>
          <input type="text" name="username" size="35" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUsername;?>
"  class="form-control"/>
        </p>
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password" size="35" value="" class="form-control"/>
        </p>
        <p>
          <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
        </p>
      </form>
    </div>
  </div>
  
</div>
<?php }
}
