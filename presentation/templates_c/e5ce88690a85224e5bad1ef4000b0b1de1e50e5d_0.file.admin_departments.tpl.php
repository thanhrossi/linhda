<?php
/* Smarty version 3.1.32, created on 2018-11-11 13:07:15
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_departments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be82983cbf0c0_79924649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ce88690a85224e5bad1ef4000b0b1de1e50e5d' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_departments.tpl',
      1 => 1541941632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be82983cbf0c0_79924649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_departments",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post"
 action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToDepartmentsAdmin;?>
">
  <h4 class="card-title">Edit the departments:</h4>
<?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }
if ($_smarty_tpl->tpl_vars['obj']->value->mDepartmentsCount == 0) {?>
  <p class="no-items-found">There are no departments in your database!</p>
<?php } else { ?>
  <table class="table table-hover">
    <tr>
      <th width="200">Department Name</th>
      <th>Department Description</th>
      <th width="240">&nbsp;</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mDepartments) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditItem == $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id']) {?>
    <tr>
      <td>
        <input type="text" name="name"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" size="30" class="form-control"/>
      </td>
      <td>
      <textarea name="description" rows="3" cols="60" class="form-control"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</textarea>
      </td>
      <td>
      <div class="btn-group">
        <input type="submit"
         name="submit_edit_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
         value="Edit Categories" class="btn btn-primary" />
        <input type="submit"
         name="submit_update_dept_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
         value="Update"  class="btn btn-success"/>
        <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark"/>
        <input type="submit"
         name="submit_delete_dept_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
         value="Delete"  class="btn btn-danger" />
      </div>
        
      </td>
    </tr>
    <?php } else { ?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['description'];?>
</td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_cat_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
         value="Edit Categories"  class="btn btn-primary"/>
          <input type="submit"
          name="submit_edit_dept_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
          value="Edit"  class="btn btn-success" />
          <input type="submit"
          name="submit_delete_dept_<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDepartments[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['department_id'];?>
"
          value="Delete"  class="btn btn-danger"/>
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
  <h3>Add new department:</h3>
  
  <div  class="row" style="width: 700px;">
    <div class="col-md-12">
    <input type="text" name="department_name" value=""  placeholder="name" size="30"  class="form-control mb-3" />
    <input type="text" name="department_description" value="" placeholder="description"  class="form-control mb-3"
     size="60" />
    <input type="submit" name="submit_add_dept_0" value="Add" class="btn btn-info"/>
    </div>
  </div>
</form>
<?php }
}
