<?php
/* Smarty version 3.1.32, created on 2018-11-25 13:56:50
  from 'D:\xampp\htdocs\cocoshop\presentation\templates\search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa9c12a22ac7_68489447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0ba00b8819432d0aa6e1136d7e02d69eccc648' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cocoshop\\presentation\\templates\\search_results.tpl',
      1 => 1543149995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5bfa9c12a22ac7_68489447 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Search results</h1>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
