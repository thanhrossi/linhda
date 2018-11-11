<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:10:08
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\cart_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be80e10f0a843_88621929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efbfe9b678ae96ef6ac3fb867b11220a9a7c778c' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\cart_summary.tpl',
      1 => 1526165772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be80e10f0a843_88621929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"cart_summary",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box" id="cart-summary">
  <p class="box-title">Giỏ hàng</p>
  <div id="updating">Cập nhật...</div>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmptyCart) {?>
  <p class="empty-cart">Thông tin giỏ hàng trống!</p>
<?php } else { ?>
  <table class="cart-summary">
    <tbody>
  <?php
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mItems) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total !== 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
      <tr>
        <td width="30" valign="top" align="right">
          <?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
 x 
        </td>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['obj']->value->mItems[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attributes'];?>
)
        </td>
      </tr>
  <?php
}
}
?>
      <tr>
        <td colspan="2" class="cart-summary-subtotal">
          <span class="price">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTotalAmount;?>
</span>
          <span>
            [ <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCartDetails;?>
">Chi tiết giỏ hàng</a> ]
          </span>
        </td>
      </tr>
    </tbody>
  </table>
<?php }?>
</div>
<?php }
}
