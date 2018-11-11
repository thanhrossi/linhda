<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:10:28
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be80e241b78e7_37801402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc68bc9e4c25eadf7a699f73c4ab1d294930a6d4' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_login.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be80e241b78e7_37801402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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
