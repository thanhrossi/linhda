<?php
/* Smarty version 3.1.32, created on 2018-05-12 15:06:43
  from 'C:\xampp\htdocs\sushikai\presentation\templates\department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af7657386cda5_64812310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0230f9d3cda2faad394a8ff309342523c32d3a22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\department.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5af7657386cda5_64812310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"department",'assign'=>"obj"),$_smarty_tpl);?>

<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mName;?>
</h1>
<p class="description"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDescription;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mShowEditButton) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEditActionTarget;?>
" method="post" class="edit-form">
  <input type="submit" name="submit_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEditAction;?>
"
   value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEditButtonCaption;?>
" />
</form>
<?php }
$_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
