<?php
/* Smarty version 3.1.32, created on 2018-11-25 13:56:04
  from 'D:\xampp\htdocs\cocoshop\presentation\templates\first_page_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa9be44244b0_74155044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba46a7cd86f851b20f4b55f6cf54910fd45c15e4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cocoshop\\presentation\\templates\\first_page_contents.tpl',
      1 => 1543149995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5bfa9be44244b0_74155044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\cocoshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"first_page_contents",'assign'=>"obj"),$_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
