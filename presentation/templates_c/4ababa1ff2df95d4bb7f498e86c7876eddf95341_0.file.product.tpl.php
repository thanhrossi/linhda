<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:11:08
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be80e4c56cb93_79725505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ababa1ff2df95d4bb7f498e86c7876eddf95341' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\product.tpl',
      1 => 1526164991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be80e4c56cb93_79725505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"product",'assign'=>"obj"),$_smarty_tpl);?>

<h1 class="title"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image']) {?>
<img class="product-image" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image'];?>
"
 alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image" />
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2']) {?>
<img class="product-image" src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2'];?>
"
 alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image 2" />
<?php }?>
<p class="description"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['description'];?>
</p>
<p class="section">
  Price:
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['discounted_price'] != 0) {?>
    <span class="old-price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['price'];?>
</span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['discounted_price'];?>
</span>
  <?php } else { ?>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['price'];?>
</span>
  <?php }?>
</p>

<form class="add-product-form" target="_self" method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['link_to_add_product'];?>
"
 onsubmit="return addProductToCart(this);">

<p class="attributes">

<?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes']) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] + 1;
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] = ($__section_k_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($__section_k_0_iteration === $__section_k_0_total);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_prev'] : null)]['attribute_name']) {?>
    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'];?>
:
  <select name="attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'];?>
">
  <?php }?>

        <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_value'];?>
">
      <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_value'];?>

    </option>

    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProduct['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index_next'] : null)]['attribute_name']) {?>
  </select>
  <?php }?>

<?php
}
}
?>
</p>

<p>
  <input type="submit" name="add_to_cart" value="Add to Cart" />
</p>
</form>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mShowEditButton) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEditActionTarget;?>
" target="_self"
 method="post" class="edit-form">
  <p>
    <input type="submit" name="submit_edit" value="Edit Product Details" />
  </p>
</form>
<?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToContinueShopping;?>
">Tiếp tục mua hàng</a>
<?php }?>
<h2>Gợi ý sản phẩm: </h2>
<ol>
<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mLocations) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
  <li class="navigation">
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_department'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_name'];?>
</a>
    &raquo;
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mLocations[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_name'];?>
</a>
  </li>
<?php
}
}
?>
</ol>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mRecommendations) {?>
<h2>Khách hàng mua nhiều: </h2>
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
