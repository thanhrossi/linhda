<?php
/* Smarty version 3.1.32, created on 2018-11-18 05:23:54
  from 'C:\xampp\htdocs\sushikai\presentation\templates\search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0e95ae219e8_00949580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b63e12e3b709d5a3c4cf869e1eeda0423f6d12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\search_box.tpl',
      1 => 1542515033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0e95ae219e8_00949580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"search_box",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">

  <form class="search_form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToSearch;?>
">
    <p>
      <input class="input search-input" maxlength="100" id="search_string" name="search_string"
       value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSearchString;?>
" size="19" placeholder="Tìm kiếm"/>
      <button type="submit" class="search-btn"  value="Go!" ><i class="fa fa-search"></i></button>
    </p>
      </form>
</div>
<?php }
}
