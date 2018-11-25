<?php
/* Smarty version 3.1.32, created on 2018-11-25 14:02:35
  from 'D:\xampp\htdocs\cocoshop\presentation\templates\department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa9d6b0866c1_34458509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308b3f0d157f706c7a3a859b4a1cbf681264a29d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cocoshop\\presentation\\templates\\department.tpl',
      1 => 1543149995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5bfa9d6b0866c1_34458509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\cocoshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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
