<?php
/* Smarty version 3.1.32, created on 2018-11-18 07:31:19
  from 'C:\xampp\htdocs\sushikai\presentation\templates\admin_attribute_values.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf10737d3f313_06886802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a765b2f0f37b883135887ef28c8955857ff0d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\admin_attribute_values.tpl',
      1 => 1542039505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf10737d3f313_06886802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_attribute_values",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributeValuesAdmin;?>
">
  <h4>
    Editing values for attribute: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeName;?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAttributesAdmin;?>
">back to attributes ...</a> ]
  </h4>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mAttributeValuesCount == 0) {?>
  <p class="no-items-found">There are no values for this attribute!</p>
<?php } else { ?>
 <div class="table-responsive"><table class="table table-hover">
    <tr>
      <th>Attribute Value</th>
      <th width="170">&nbsp;</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mAttributeValues) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditItem == $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id']) {?>
    <tr>
      <td>
        <input type="text" name="value"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
" size="30" class="form-control" />
      </td>
      <td>
        <input type="submit"
         name="submit_update_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
         value="Update" class="btn btn-primary" />
        <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark" />
        <input type="submit"
         name="submit_delete_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
         value="Delete"  class="btn btn-danger" />
      </td>
    </tr>
    <?php } else { ?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['value'];?>
</td>
      <td>
        <div class="btn-group">
          <input type="submit"
          name="submit_edit_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
"
          value="Edit" class="btn btn-success"/>
          <input type="submit"
          name="submit_delete_val_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAttributeValues[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attribute_value_id'];?>
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
  <h3>Add new attribute value:</h3>
  <div class="row" style="width: 700px;">
    <div class="col-md-12">
    <input type="text" name="attribute_value" value="" placeholder="value" size="30"  class="form-control mb-3"/>
    <input type="submit" name="submit_add_val_0" value="Add" class="btn btn-info"/>
    </div>
  </div>
</form>
<?php }
}
