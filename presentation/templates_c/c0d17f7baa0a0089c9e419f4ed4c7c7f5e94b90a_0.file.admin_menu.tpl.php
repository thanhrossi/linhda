<?php
/* Smarty version 3.1.32, created on 2018-05-12 14:59:49
  from 'C:\xampp\htdocs\sushikai\presentation\templates\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af763d539f911_34851939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d17f7baa0a0089c9e419f4ed4c7c7f5e94b90a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\admin_menu.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af763d539f911_34851939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_menu",'assign'=>"obj"),$_smarty_tpl);?>

<h1>TShirtShop Admin</h1>
<p class="menu"> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreAdmin;?>
">CATALOG ADMIN</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">PRODUCTS ATTRIBUTES ADMIN</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartsAdmin;?>
">CARTS ADMIN</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToOrdersAdmin;?>
">ORDERS ADMIN</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreFront;?>
">STOREFRONT</a> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogout;?>
">LOGOUT</a> |
</p>
<?php }
}
