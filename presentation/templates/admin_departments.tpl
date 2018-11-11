{* admin_departments.tpl *}
{load_presentation_object filename="admin_departments" assign="obj"}
<form method="post"
 action="{$obj->mLinkToDepartmentsAdmin}">
  <h4 class="card-title">Edit the departments:</h4>
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
{if $obj->mDepartmentsCount eq 0}
  <p class="no-items-found">There are no departments in your database!</p>
{else}
  <div class="table-responsive"><table class="table table-hover">
    <tr>
      <th width="200">Department Name</th>
      <th>Department Description</th>
      <th width="240">&nbsp;</th>
    </tr>
  {section name=i loop=$obj->mDepartments}
    {if $obj->mEditItem == $obj->mDepartments[i].department_id}
    <tr>
      <td>
        <input type="text" name="name"
         value="{$obj->mDepartments[i].name}" size="30" class="form-control"/>
      </td>
      <td>
      {strip}
        <textarea name="description" rows="3" cols="60" class="form-control">
          {$obj->mDepartments[i].description}
        </textarea>
      {/strip}
      </td>
      <td>
      <div class="btn-group">
        <input type="submit"
         name="submit_edit_cat_{$obj->mDepartments[i].department_id}"
         value="Edit Categories" class="btn btn-primary" />
        <input type="submit"
         name="submit_update_dept_{$obj->mDepartments[i].department_id}"
         value="Update"  class="btn btn-success"/>
        <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark"/>
        <input type="submit"
         name="submit_delete_dept_{$obj->mDepartments[i].department_id}"
         value="Delete"  class="btn btn-danger" />
      </div>
        
      </td>
    </tr>
    {else}
    <tr>
      <td>{$obj->mDepartments[i].name}</td>
      <td>{$obj->mDepartments[i].description}</td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_cat_{$obj->mDepartments[i].department_id}"
         value="Edit Categories"  class="btn btn-primary"/>
          <input type="submit"
          name="submit_edit_dept_{$obj->mDepartments[i].department_id}"
          value="Edit"  class="btn btn-success" />
          <input type="submit"
          name="submit_delete_dept_{$obj->mDepartments[i].department_id}"
          value="Delete"  class="btn btn-danger"/>
        </div>
        
      </td>
    </tr>
    {/if}
  {/section}
  </table>
  </div>
{/if}
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
