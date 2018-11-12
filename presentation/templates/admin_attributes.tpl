{* admin_attributes.tpl *}
{load_presentation_object filename="admin_attributes" assign="obj"}
<form method="post"
 action="{$obj->mLinkToAttributesAdmin}">
  <h4 class="card-title">Edit the CocoShop product attributes:</h4>
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
{if $obj->mAttributesCount eq 0}
  <p class="no-items-found">
    There are no products attributes in your database!
  </p>
{else}
  <div class="table-responsive"><table class="table table-hover table-striped">
    <tr>
      <th>Attribute Name</th>
      <th width="240">&nbsp;</th>
    </tr>
  {section name=i loop=$obj->mAttributes}
    {if $obj->mEditItem == $obj->mAttributes[i].attribute_id}
    <tr>
      <td>
        <input type="text" name="name"
         value="{$obj->mAttributes[i].name}" size="30" class="form-control" />
      </td>
      <td>
        <div class="btn-group" >
          <input type="submit"
         name="submit_update_attr_{$obj->mAttributes[i].attribute_id}"
         value="Update" class="btn btn-primary"/>
          <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark" />
          <input type="submit"
          name="submit_delete_attr_{$obj->mAttributes[i].attribute_id}"
          value="Delete"  class="btn btn-danger" />
        </div>
        
        
      </td>
    </tr>
    {else}
    <tr>
      <td>{$obj->mAttributes[i].name}</td>
      <td>
        <div class="btn-group">
          <input type="submit"
         name="submit_edit_val_{$obj->mAttributes[i].attribute_id}"
         value="Edit Attribute Values" class="btn btn-primary"/>
        <input type="submit"
         name="submit_edit_attr_{$obj->mAttributes[i].attribute_id}"
         value="Edit" class="btn btn-success"/>
        <input type="submit"
         name="submit_delete_attr_{$obj->mAttributes[i].attribute_id}"
         value="Delete" class="btn btn-danger" />
        </div>
        
      </td>
    </tr>
    {/if}
  {/section}
  </table></div>
{/if}
  <h3>Add new attribute:</h3>
  <div class="row" style="width: 700px;">
    <div class="col-md-12">
      <input type="text" name="attribute_name" value="" placeholder="name" size="30"  class="form-control mb-3"/>
      <input type="submit" name="submit_add_attr_0" value="Add" class="btn btn-info" />
    </div>
  </div>
</form>
