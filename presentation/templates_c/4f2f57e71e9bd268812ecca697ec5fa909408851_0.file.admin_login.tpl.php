<?php
/* Smarty version 3.1.32, created on 2018-05-12 14:59:44
  from 'C:\xampp\htdocs\sushikai\presentation\templates\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af763d0089576_34926742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2f57e71e9bd268812ecca697ec5fa909408851' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\admin_login.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af763d0089576_34926742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_login",'assign'=>"obj"),$_smarty_tpl);?>

<div class="login">
  <p class="login-title">TShirtShop Login</p>
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">
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
" />
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" size="35" value="" />
    </p>
    <p>
      <input type="submit" name="submit" value="Login" />
    </p>
  </form>
</div>
<?php }
}
