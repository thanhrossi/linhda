<?php
/* Smarty version 3.1.32, created on 2018-05-12 15:57:30
  from 'C:\xampp\htdocs\sushikai\presentation\templates\store_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af7715a4f4500_15203916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cb392eadc364d8f60d217a3b22aa98505534a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\store_admin.tpl',
      1 => 1526164816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af7715a4f4500_15203916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"store_admin",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>sushikai_admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/tshirtshop.css" type="text/css"
     rel="stylesheet" />
  </head>
  <body>
    <div id="doc" class="yui-t7">
      <div id="bd">
        <div class="yui-g">
          <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mMenuCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <div class="yui-g">
          <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
