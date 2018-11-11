<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:10:08
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\customer_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be80e10cfa558_03443902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07041235ceee9739237af305474fc7d8e0e3f7d5' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\customer_login.tpl',
      1 => 1526165291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be80e10cfa558_03443902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_login",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
  <p class="box-title">Đăng nhập</p>
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogin;?>
">
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }?>
    <p>
      <label for="email">Địa chỉ E-mail:</label>
      <input type="text" maxlength="50" name="email" size="22"
       value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEmail;?>
" />
    </p>
    <p>
      <label for="password">Mật khẩu:</label>
      <input type="password" maxlength="50" name="password" size="22" />
    </p>
    <p>
      <input type="submit" name="Login" value="Login" /> |
      <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToRegisterCustomer;?>
">Bạn chưa có tài khoản?</a>
    </p>
  </form>
</div>
<?php }
}
