{* admin_attribute_values.tpl *}
{load_presentation_object filename="admin_attribute_values" assign="obj"}
<form method="post"
 action="{$obj->mLinkToAttributeValuesAdmin}">
  <h4>
    Editing values for attribute: {$obj->mAttributeName} [
    <a href="{$obj->mLinkToAttributesAdmin}">back to attributes ...</a> ]
  </h4>
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
{if $obj->mAttributeValuesCount eq 0}
  <p class="no-items-found">There are no values for this attribute!</p>
{else}
 <div class="table-responsive"><table class="table table-hover">
    <tr>
      <th>Attribute Value</th>
      <th width="170">&nbsp;</th>
    </tr>
  {section name=i loop=$obj->mAttributeValues}
    {if $obj->mEditItem == $obj->mAttributeValues[i].attribute_value_id}
    <tr>
      <td>
        <input type="text" name="value"
         value="{$obj->mAttributeValues[i].value}" size="30" class="form-control" />
      </td>
      <td>
        <input type="submit"
         name="submit_update_val_{$obj->mAttributeValues[i].attribute_value_id}"
         value="Update" class="btn btn-primary" />
        <input type="submit" name="cancel" value="Cancel"  class="btn btn-dark" />
        <input type="submit"
         name="submit_delete_val_{$obj->mAttributeValues[i].attribute_value_id}"
         value="Delete"  class="btn btn-danger" />
      </td>
    </tr>
    {else}
    <tr>
      <td>{$obj->mAttributeValues[i].value}</td>
      <td>
        <div class="btn-group">
          <input type="submit"
          name="submit_edit_val_{$obj->mAttributeValues[i].attribute_value_id}"
          value="Edit" class="btn btn-success"/>
          <input type="submit"
          name="submit_delete_val_{$obj->mAttributeValues[i].attribute_value_id}"
          value="Delete" class="btn btn-danger" />
        </div>
        
      </td>
    </tr>
    {/if}
  {/section}
  </table></div>
{/if}
  <h3>Add new attribute value:</h3>
  <div class="row" style="width: 700px;">
    <div class="col-md-12">
    <input type="text" name="attribute_value" value="" placeholder="value" size="30"  class="form-control mb-3"/>
    <input type="submit" name="submit_add_val_0" value="Add" class="btn btn-info"/>
    </div>
  </div>
</form>
