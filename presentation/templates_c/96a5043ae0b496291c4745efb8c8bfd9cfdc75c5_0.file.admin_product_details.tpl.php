<?php
/* Smarty version 3.1.32, created on 2018-11-11 15:24:26
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_product_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be849aadc77c4_91469453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a5043ae0b496291c4745efb8c8bfd9cfdc75c5' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_product_details.tpl',
      1 => 1541946963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be849aadc77c4_91469453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_product_details",'assign'=>"obj"),$_smarty_tpl);?>

<form enctype="multipart/form-data" method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToProductDetailsAdmin;?>
">
  <h4>
    Editing product: ID #<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['product_id'];?>
 &mdash;
    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCategoryProductsAdmin;?>
">
      trở lại ...</a> ]
  </h4>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }?>
  <div class="table-responsive"><table class="table table-hover product-detail-admin">
    <tbody>
      <tr class="row">
        <td valign="top" class="col-md-6 pr-1">
          <p class="bold-text">
            Product name:
          </p>
          <p>
            <input type="text" name="name"
            value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
" size="30" class="form-control mb-3" />
          </p>
          <p class="bold-text">
            Product description:
          </p>
          <p>
            <textarea name="description" rows="20" cols="60" class="form-control mb-3"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['description'];?>
</textarea>
          </p>
          <p class="bold-text">
            Product price:
          </p>
          <p>
            <input type="text" name="price"
             value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['price'];?>
" size="5" class="form-control mb-3" />
          </p>
          <p class="bold-text">
            Product discounted price:
          </p>
          <p>
            <input type="text" name="discounted_price"
             value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['discounted_price'];?>
" size="5"  class="form-control mb-3"/>
          </p>
          <p>
            <input type="submit" class="btn btn-primary"  name="UpdateProductInfo"
             value="Update info" class="btn btn-primary" />
          </p>
        </td>
        <td valign="top"  class="col-md-6 pr-1">
          <div class="">
            <font class="bold-text">Product belongs to these categories:</font>
            <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProductCategoriesString;?>

          </div>
          <p class="bold-text ">
            Remove this product from:
          </p>
          <p  class="">
            <?php echo smarty_function_html_options(array('name'=>"TargetCategoryIdRemove",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mRemoveFromCategories),$_smarty_tpl);?>

            <input type="submit"  name="RemoveFromCategory" value="Remove"
             <?php if ($_smarty_tpl->tpl_vars['obj']->value->mRemoveFromCategoryButtonDisabled) {?>
             disabled="disabled"  class="btn btn-disable"<?php }?>/>
          </p>
          <p class="bold-text">
            Assign product to this category:
          </p>
          <p  class="">
            <?php echo smarty_function_html_options(array('name'=>"TargetCategoryIdAssign",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mAssignOrMoveTo),$_smarty_tpl);?>

            <input type="submit" class="btn btn-primary"  name="Assign" value="Assign" />
          </p>
          <p class="bold-text">
            Move product to this category:
          </p>
          <p  class="">
            <?php echo smarty_function_html_options(array('name'=>"TargetCategoryIdMove",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mAssignOrMoveTo),$_smarty_tpl);?>

            <input type="submit" class="btn btn-primary"  name="Move" value="Move" />
            <input type="submit" class="btn btn-primary"  name="RemoveFromCatalog"
             value="Remove product from catalog"
             <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mRemoveFromCategoryButtonDisabled) {?>
             disabled="disabled" <?php }?>/>
          </p>
          <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProductAttributes) {?>
          <p class="bold-text">
            Product attributes:
          </p>
          <p  class="">
            <?php echo smarty_function_html_options(array('name'=>"TargetAttributeValueIdRemove",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mProductAttributes),$_smarty_tpl);?>

            <input type="submit" class="btn btn-primary"  name="RemoveAttributeValue"
             value="Remove" />
          </p>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCatalogAttributes) {?>
          <p class="bold-text">
            Assign attribute to product:
          </p>
          <p>
            <?php echo smarty_function_html_options(array('name'=>"TargetAttributeValueIdAssign",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mCatalogAttributes),$_smarty_tpl);?>

            <input type="submit" class="btn btn-primary"  name="AssignAttributeValue"
             value="Assign" />
          </p>
          <?php }?>
          <p class="bold-text">
            Set display option for this product:
          </p>
          <p>
            <?php echo smarty_function_html_options(array('name'=>"ProductDisplay",'class'=>"custom-select",'options'=>$_smarty_tpl->tpl_vars['obj']->value->mProductDisplayOptions,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mProduct['display']),$_smarty_tpl);?>

            <input type="submit" class="btn btn-primary"  name="SetProductDisplayOption" value="Set" />
          </p>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  <p>
    <font class="bold-text">Image name:</font> <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image'];?>

    <input name="ImageUpload" type="file" value="Upload" />
    <input type="submit" class="btn btn-primary"  name="Upload" value="Upload" />
  </p>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image']) {?>
  <p>
    <img src="product_images/<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image'];?>
"
     border="0" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image" />
  </p>
  <?php }?>
  <p>
    <font class="bold-text">Image 2 name:</font> <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2'];?>

    <input name="Image2Upload" type="file" value="Upload" />
    <input type="submit" class="btn btn-primary"  name="Upload" value="Upload" />
  </p>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2']) {?>
  <p>
    <img src="product_images/<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['image_2'];?>
"
     border="0" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 image 2" />
  </p>
  <?php }?>
  <p>
    <font class="bold-text">Thumbnail name:</font> <?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['thumbnail'];?>

    <input name="ThumbnailUpload" type="file" value="Upload" />
    <input type="submit" class="btn btn-primary"  name="Upload" value="Upload" />
  </p>
  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProduct['thumbnail']) {?>
  <p>
    <img src="product_images/<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['thumbnail'];?>
"
     border="0" alt="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProduct['name'];?>
 thumbnail" />
  </p>
  <?php }?>
</form>
<?php }
}
