<?php
/* Smarty version 3.1.32, created on 2018-11-11 13:18:09
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be82c11982d99_07042473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e232ac383e65390feb679024d90b6c02157af5a6' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_products.tpl',
      1 => 1541942283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be82c11982d99_07042473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_products",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCategoryProductsAdmin;?>
">
  <h4>
    Editing products for category: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategoryName;?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentCategoriesAdmin;?>
">
      Trở lại ...</a> ]
  </h4>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mProductsCount == 0) {?>
  <p class="no-items-found">There are no products in this category!</p>
<?php } else { ?>
  <table class="table table-hover">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Discounted Price</th>
      <th width="80">&nbsp;</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mProducts) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['discounted_price'];?>
</td>
      <td>
        <input type="submit"
         name="submit_edit_prod_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProducts[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_id'];?>
"
         value="Edit" class="btn btn-success" />
      </td>
    </tr>
  <?php
}
}
?>
  </table>
<?php }?>
  <h3>Add new product:</h3>
  <div class="row" style="width: 700px;">
    <div class="col-md-12">
      <input type="text" name="product_name" value="" placeholder="name" size="30"  class="form-control mb-3" />
      <input type="text" name="product_description"  placeholder="description" value=""
      size="60"  class="form-control mb-3" />
      <input type="text" name="product_price" value="" placeholder="price" size="10"  class="form-control mb-3"/>
      <input type="submit" name="submit_add_prod_0" value="Add" class="btn btn-success"/>
    </div>
  </div>
  
</form>
<?php }
}
