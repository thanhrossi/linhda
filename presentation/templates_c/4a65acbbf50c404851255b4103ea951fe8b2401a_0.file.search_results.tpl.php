<?php
/* Smarty version 3.1.32, created on 2018-11-11 15:12:46
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\search_results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be846eeec44a9_84992814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a65acbbf50c404851255b4103ea951fe8b2401a' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\search_results.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5be846eeec44a9_84992814 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Search results</h1>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
