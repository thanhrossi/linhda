<?php
/* Smarty version 3.1.32, created on 2018-11-11 13:14:01
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be82b19d08ee7_33079596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9d61e385f5699985883316f0369cbe60a835cb' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_categories.tpl',
      1 => 1541942038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be82b19d08ee7_33079596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_categories",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentCategoriesAdmin;?>
">
  <h4>
    Editing categories for department: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartmentName;?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentsAdmin;?>
">back to departments ...</a> ]
  </h4>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mCategoriesCount == 0) {?>
  <p class="no-items-found">There are no categories in this department!</p>
<?php } else { ?>
  <table class="table table-hover">
    <tr>
      <th width="200">Category Name</th>
      <th>Category Description</th>
      <th width="240">&nbsp;</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mCategories) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditItem == $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id']) {?>
    <tr>
      <td>
        <input type="text" name="name"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" size="30" />
      </td>
      <td>
        <textarea name="description" rows="3" cols="60"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</textarea>
      </td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_prod_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Edit Products"  class="btn btn-primary" />
          <input type="submit"
          name="submit_update_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
          value="Update"  class="btn btn-success" />
          <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark"  />
          <input type="submit"
          name="submit_delete_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
          value="Delete"  class="btn btn-danger"  />
        </div>
        
      </td>
    </tr>
    <?php } else { ?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_prod_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Edit Products"  class="btn btn-primary"  />
          <input type="submit"
          name="submit_edit_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
          value="Edit"   class="btn btn-success" />
          <input type="submit"
          name="submit_delete_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
          value="Delete"  class="btn btn-danger"  />
        </div>
        
      </td>
    </tr>
    <?php }?>
  <?php
}
}
?>
  </table>
<?php }?>
  <h3>Add new category:</h3>
  <div  class="row" style="width: 700px;">
    <div class="col-md-12">
      <input type="text" name="category_name" value=""  placeholder="name" size="30" class="form-control mb-3"/>
      <input type="text" name="category_description" value="" placeholder="description"
      size="60" class="form-control mb-3" />
      <input type="submit" name="submit_add_cat_0" value="Add" class="btn btn-info" />
    </div>
  </div>
  
</form>
<?php }
}
