<?php
/* Smarty version 3.1.32, created on 2018-11-11 12:12:16
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be81ca0584085_63581211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8c00aaab61c4a42d5448a4b757922f1afce80f' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_menu.tpl',
      1 => 1541938334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be81ca0584085_63581211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_menu",'assign'=>"obj"),$_smarty_tpl);?>



<ul class="nav">
  <li class="nav-item">
      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreAdmin;?>
">
          <i class="nc-icon nc-chart-pie-35"></i>
          <p>CATALOG ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">
          <i class="nc-icon nc-circle-09"></i>
          <p>PRODUCTS ATTRIBUTES ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartsAdmin;?>
">
          <i class="nc-icon nc-notes"></i>
          <p>CARTS ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link"  href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToOrdersAdmin;?>
">
          <i class="nc-icon nc-paper-2"></i>
          <p>ORDERS ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToStoreFront;?>
">
          <i class="nc-icon nc-atom"></i>
          <p>STOREFRONT</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogout;?>
">
          <i class="nc-icon nc-pin-3"></i>
          <p>LOGOUT</p>
      </a>
  </li>

  
</ul><?php }
}
