<?php
/* Smarty version 3.1.32, created on 2018-11-18 09:25:20
  from 'C:\xampp\htdocs\sushikai\presentation\templates\products_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf121f0d34ad9_26210140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb4e600472877bf36e2e866fb2c126e070af1b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\products_list.tpl',
      1 => 1542529517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf121f0d34ad9_26210140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"products_list",'assign'=>"obj"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['obj']->value->mSearchDescription != '') {?>
  <p class="description"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mSearchDescription;?>
</p>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['obj']->value->mProducts) {?>
<table class="product-list" border="0">
  <tbody>
  <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProducts) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] = ($__section_k_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] = ($__section_k_0_iteration === $__section_k_0_total);
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)%2 == 0) {?>
    <tr>
    <?php }?>
      <td valign="top">
        <h3 class="product-title">
          <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['link_to_product'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>

          </a>
        </h3>
        <p>
          <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['thumbnail'] != '') {?>
          
            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['link_to_product'];?>
">
              <span class="image-wrapper"><img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['thumbnail'];?>
"
              alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
" />
              </span>
            </a>
          
          <?php }?>
                 </p>
        <p class="section">
          
          <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['discounted_price'] != 0) {?>
            <span class="price">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['discounted_price'];?>
</span>
            <span class="old-price">$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</span>
            
          <?php } else { ?>
            <span class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</span>
          <?php }?>
        </p>

                <form class="add-product-form" target="_self" method="post"
         action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['link_to_add_product'];?>
"
         onsubmit="return addProductToCart(this);">

                <p class="attributes">

                <?php
$__section_l_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes']) ? count($_loop) : max(0, (int) $_loop));
$__section_l_1_total = $__section_l_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_l'] = new Smarty_Variable(array());
if ($__section_l_1_total !== 0) {
for ($__section_l_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] = 0; $__section_l_1_iteration <= $__section_l_1_total; $__section_l_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] + 1;
$_smarty_tpl->tpl_vars['__smarty_section_l']->value['first'] = ($__section_l_1_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_l']->value['last'] = ($__section_l_1_iteration === $__section_l_1_total);
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['first'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_prev'] : null)]['attribute_name']) {?>
            <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_name'];?>
:
          <select name="attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_name'];?>
">
          <?php }?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_value'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_value'];?>

            </option>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['last'] : null) || $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index'] : null)]['attribute_name'] !== $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['attributes'][(isset($_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_l']->value['index_next'] : null)]['attribute_name']) {?>
          </select>
          <?php }?>

        <?php
}
}
?>
        </p>

                <p>
          <input type="submit" name="name="add_to_cart"  class="btn primary-btn" value="Add to Cart" />
        </p>
        </form>

            <?php if ($_smarty_tpl->tpl_vars['obj']->value->mShowEditButton) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEditActionTarget;?>
" target="_self"
         method="post" class="edit-form">
          <input type="hidden" name="product_id"
           value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['product_id'];?>
" />
          <input type="submit" name="submit" value="Edit Product Details" class="btn edit-btn" />
        </form>
      <?php }?>
      </td>
    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)%2 != 0 && !(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['first'] : null) || (isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['last'] : null)) {?>
    </tr>
    <?php }?>
  <?php
}
}
?>
  </tbody>
</table>


<?php }
if (count($_smarty_tpl->tpl_vars['obj']->value->mProductListPages) > 0) {?>
<nav aria-label="Page navigation">
  <ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage) {?>
    <li class="page-item"><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToPreviousPage;?>
"><<</a></li>
    <?php }?>

    <?php
$__section_m_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProductListPages) ? count($_loop) : max(0, (int) $_loop));
$__section_m_2_total = $__section_m_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_m'] = new Smarty_Variable(array());
if ($__section_m_2_total !== 0) {
for ($__section_m_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] = 0; $__section_m_2_iteration <= $__section_m_2_total; $__section_m_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] + 1;
?>
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPage == (isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next'] : null)) {?>
      <li class="page-item active">
        <a class="page-link" href="#"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next'] : null);?>
</a>
      </li>
      <?php } else { ?>
      <li class="page-item"><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProductListPages[(isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index'] : null)];?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_m']->value['index_next'] : null);?>
</a></li>
      <?php }?>
    <?php
}
}
?>

    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage) {?>
    <li class="page-item"><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToNextPage;?>
">>></a></li>
    <?php }?>
  </ul>
</nav>
<?php }
}
}
