<?php
/* Smarty version 3.1.32, created on 2018-05-12 15:58:30
  from 'C:\xampp\htdocs\sushikai\presentation\templates\admin_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af77196ac4e67_62564074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb594e776d7e0d18e26eaaa6372bc2dd1e2705f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\admin_categories.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af77196ac4e67_62564074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_categories",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentCategoriesAdmin;?>
">
  <h3>
    Editing categories for department: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartmentName;?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentsAdmin;?>
">back to departments ...</a> ]
  </h3>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mCategoriesCount == 0) {?>
  <p class="no-items-found">There are no categories in this department!</p>
<?php } else { ?>
  <table class="tss-table">
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
        <input type="submit"
         name="submit_edit_prod_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Edit Products" />
        <input type="submit"
         name="submit_update_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Update" />
        <input type="submit" name="cancel" value="Cancel" />
        <input type="submit"
         name="submit_delete_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Delete" />
      </td>
    </tr>
    <?php } else { ?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</td>
      <td>
        <input type="submit"
         name="submit_edit_prod_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Edit Products" />
        <input type="submit"
         name="submit_edit_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Edit" />
        <input type="submit"
         name="submit_delete_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCategories[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_id'];?>
"
         value="Delete" />
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
  <input type="text" name="category_name" value="[name]" size="30" />
  <input type="text" name="category_description" value="[description]"
   size="60" />
  <input type="submit" name="submit_add_cat_0" value="Add" />
</form>
<?php }
}
