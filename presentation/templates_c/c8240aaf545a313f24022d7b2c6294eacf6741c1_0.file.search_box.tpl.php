<?php
/* Smarty version 3.1.32, created on 2018-11-25 13:56:04
  from 'D:\xampp\htdocs\cocoshop\presentation\templates\search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa9be43587e6_82892706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8240aaf545a313f24022d7b2c6294eacf6741c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cocoshop\\presentation\\templates\\search_box.tpl',
      1 => 1543149995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfa9be43587e6_82892706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\cocoshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
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
