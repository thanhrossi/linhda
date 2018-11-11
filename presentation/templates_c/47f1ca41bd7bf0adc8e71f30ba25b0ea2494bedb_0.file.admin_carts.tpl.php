<?php
/* Smarty version 3.1.32, created on 2018-11-11 14:18:34
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_carts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be83a3a8458a4_75589790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f1ca41bd7bf0adc8e71f30ba25b0ea2494bedb' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_carts.tpl',
      1 => 1541945912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be83a3a8458a4_75589790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_carts",'assign'=>"obj"),$_smarty_tpl);?>

<form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartsAdmin;?>
" method="post">
  <h3>Admin users&#039; shopping carts:</h3>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mMessage) {?><p><?php echo $_smarty_tpl->tpl_vars['obj']->value->mMessage;?>
</p><?php }?>
  <p>
    Select carts:
    <?php echo smarty_function_html_options(array('name'=>"days",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mDaysOptions,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mSelectedDaysNumber),$_smarty_tpl);?>

    <input type="submit" name="submit_count" value="Count Old Shopping Carts"  class="btn btn-primary"/>
    <input type="submit" name="submit_delete"
     value="Delete Old Shopping Carts"   class="btn btn-danger" />
  </p>
</form>
<?php }
}
