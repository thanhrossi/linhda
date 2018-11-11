<?php
/* Smarty version 3.1.32, created on 2018-05-12 15:55:35
  from 'C:\xampp\htdocs\sushikai\presentation\templates\first_page_contents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af770e7153d83_82011198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e11acf60c623c2c5e5ee9444fa839ef7a2c482' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\first_page_contents.tpl',
      1 => 1526165184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:products_list.tpl' => 1,
  ),
),false)) {
function content_5af770e7153d83_82011198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"first_page_contents",'assign'=>"obj"),$_smarty_tpl);?>

<p class="description">
  Chúng tôi hi vọng sẽ mang đến cho quý khách những bữa ăn tuyệt vời nhất mang hương vị của xứ sở Nhật Bản!!!
</p>
<p class="description">
  Ở đâu có các bạn, ở đó có SushiKai!
</p>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">Đăng nhập admin</a>.</p>
<?php $_smarty_tpl->_subTemplateRender("file:products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
