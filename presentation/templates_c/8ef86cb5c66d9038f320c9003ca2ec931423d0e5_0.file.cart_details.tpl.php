<?php
/* Smarty version 3.1.32, created on 2018-11-18 09:12:35
  from 'C:\xampp\htdocs\sushikai\presentation\templates\cart_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf11ef36005d3_66838372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef86cb5c66d9038f320c9003ca2ec931423d0e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\cart_details.tpl',
      1 => 1542528754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf11ef36005d3_66838372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"cart_details",'assign'=>"obj"),$_smarty_tpl);?>

<div id="updating">Updating...</div>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mIsCartNowEmpty == 1) {?>
<h3>Your shopping cart is empty!</h3>
<?php } else { ?>

<form class="cart-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mUpdateCartTarget;?>
"
 onsubmit="return executeCartAction(this);">
  
  <div class="order-summary clearfix">
    <div class="section-title">
      <h3 class="title">Order Review</h3>
    </div>
    <table class="shopping-cart-table table">
      <thead>
        <tr>
          <th>Product</th>
          <th></th>
          <th class="text-center">Price</th>
          <th class="text-center">Quantity</th>
          <th class="text-center">Total</th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
      <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mCartProducts) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
      <tr>
        <td class="details">
          <input name="itemId[]" type="hidden"
          value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['item_id'];?>
" />
          <a ><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a>
          <ul>
              <li><span><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attributes'];?>
</span></li>
          </ul>
          
        </td>
        <td class="price text-center">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
        <td class="qty text-center">
          <input type="text" name="quantity[]" size="5"
          value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
" class="input" />
        </td>
        <td class="total text-center"><strong class="primary-color">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subtotal'];?>
</strong></td>
        <td class="text-right">
          <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['save'];?>
"
          onclick="return executeCartAction(this);">Save for later</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['remove'];?>
" class="main-btn icon-btn"
          onclick="return executeCartAction(this); "><i class="fa fa-close"></i></a>
        </td>
      </tr>
    <?php
}
}
?>
        
        
      </tbody>
      <tfoot>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>SUBTOTAL</th>
          <th colspan="2" class="sub-total">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTotalAmount;?>
</th>
        </tr>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>SHIPING</th>
          <td colspan="2">Free Shipping</td>
        </tr>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>TOTAL</th>
          <th colspan="2" class="total">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTotalAmount;?>
</th>
        </tr>
      </tfoot>
    </table>
    <div class="pull-right">
            <input class="btn edit-btn" type="submit" name="update" value="Update" />
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mShowCheckoutLink) {?>
        <a  class="primary-btn" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCheckout;?>
">Đặt hàng</a>
      <?php }?>
    </div>
  </div>
</form>
<?php }
if (($_smarty_tpl->tpl_vars['obj']->value->mIsCartLaterEmpty == 0)) {?>
<h3>Thêm vào mua sau:</h3>
<table class="shopping-cart-table table">
  <tr>
    <th>Tên đồ ăn</th>
    <th>Giá</th>
    <th>&nbsp;</th>
  </tr>
  <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
  <tr>
    <td class="details">
      <?php echo $_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name'];?>

      (<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['attributes'];?>
)
    </td>
    <td>
      $<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['price'];?>

    </td>
    <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['move'];?>
"
         onclick="return executeCartAction(this);">Chuyển mua sau</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSavedCartProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['remove'];?>
"
         onclick="return executeCartAction(this);">Xóa khỏi giỏ</a>
    </td>
  </tr>
  <?php
}
}
?>
</table>
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping) {?>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping;?>
">Tiếp tục mua hàng </a></p>
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mRecommendations) {?>
<h2>Sản phẩm đi kèm:</h2>
<ol>
  <?php
$__section_m_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mRecommendations) ? count($_loop) : max(0, (int) $_loop));
$__section_m_2_total = $__section_m_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_m'] = new Smarty_Variable(array());
if ($__section_m_2_total !== 0) {
for ($__section_m_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] = 0; $__section_m_2_iteration <= $__section_m_2_total; $__section_m_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']++){
?>
  <li>
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mRecommendations[(isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] : null)]['link_to_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mRecommendations[(isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] : null)]['product_name'];?>
</a>
    <span class="list"> - <?php echo $_smarty_tpl->tpl_vars['obj']->value->mRecommendations[(isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] : null)]['description'];?>
</span>
  </li>
  <?php
}
}
?>
</ol>
<?php }
}
}
