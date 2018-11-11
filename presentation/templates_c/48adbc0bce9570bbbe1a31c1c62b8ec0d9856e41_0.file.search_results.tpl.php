<?php
/* Smarty version 3.1.32, created on 2018-05-12 19:14:51
  from 'C:\xampp\htdocs\sushikai\presentation\templates\search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af79f9b587284_42867212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48adbc0bce9570bbbe1a31c1c62b8ec0d9856e41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\search_results.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5af79f9b587284_42867212 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Search results</h1>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
