<?php
/* Smarty version 3.1.32, created on 2018-05-13 01:49:35
  from 'C:\xampp\htdocs\sushikai\presentation\templates\customer_logged.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af7fc1f79b015_51891214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e05b256bc1cd8f46e43f12642a69172dbf80956' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\customer_logged.tpl',
      1 => 1526165370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af7fc1f79b015_51891214 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_logged",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
  <p class="box-title">Xin chào , <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerName;?>
</p>
  <ul>
    <li>
      <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'account') {?> class="selected" <?php }?>
         href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAccountDetails;?>
">
          Chỉnh sửa tài khoản
      </a>
    </li>
    <li>
      <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'credit-card') {?> class="selected" <?php }?>
         href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCreditCardDetails;?>
">
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCreditCardAction;?>
 Chi tiết Card
      </a>
    </li>
    <li>
      <a <?php if ($_smarty_tpl->tpl_vars['obj']->value->mSelectedMenuItem == 'address') {?> class="selected" <?php }?>
         href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAddressDetails;?>
">
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mAddressAction;?>
 Địa chỉ
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogout;?>
">
        Đăng xuất
      </a>
    </li>
  </ol>
</div>
<?php }
}
