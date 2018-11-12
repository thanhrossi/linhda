<?php
/* Smarty version 3.1.32, created on 2018-11-12 16:19:55
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be9a82b86f6b7_46339998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99cb93b3c1a779f46c800f9e6bfe1e11e5335e75' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_attributes.tpl',
      1 => 1542039593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9a82b86f6b7_46339998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_attributes",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">
  <h4 class="card-title">Edit the CocoShop product attributes:</h4>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mAttributesCount == 0) {?>
  <p class="no-items-found">
    There are no products attributes in your database!
  </p>
<?php } else { ?>
  <div class="table-responsive"><table class="table table-hover table-striped">
    <tr>
      <th>Attribute Name</th>
      <th width="240">&nbsp;</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mAttributes) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditItem == $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id']) {?>
    <tr>
      <td>
        <input type="text" name="name"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" size="30" class="form-control" />
      </td>
      <td>
        <div class="btn-group" >
          <input type="submit"
         name="submit_update_attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id'];?>
"
         value="Update" class="btn btn-primary"/>
          <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark" />
          <input type="submit"
          name="submit_delete_attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id'];?>
"
          value="Delete"  class="btn btn-danger" />
        </div>
        
        
      </td>
    </tr>
    <?php } else { ?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id'];?>
"
         value="Edit Attribute Values" class="btn btn-primary"/>
        <input type="submit"
         name="submit_edit_attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id'];?>
"
         value="Edit" class="btn btn-success"/>
        <input type="submit"
         name="submit_delete_attr_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributes[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_id'];?>
"
         value="Delete" class="btn btn-danger" />
        </div>
        
      </td>
    </tr>
    <?php }?>
  <?php
}
}
?>
  </table></div>
<?php }?>
  <h3>Add new attribute:</h3>
  <div class="row" style="width: 700px;">
    <div class="col-md-12">
      <input type="text" name="attribute_name" value="" placeholder="name" size="30"  class="form-control mb-3"/>
      <input type="submit" name="submit_add_attr_0" value="Add" class="btn btn-info" />
    </div>
  </div>
</form>
<?php }
}
