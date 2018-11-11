{* admin_products.tpl *}
{load_presentation_object filename="admin_products" assign="obj"}
<form method="post"
 action="{$obj->mLinkToCategoryProductsAdmin}">
  <h4>
    Editing products for category: {$obj->mCategoryName} [
    <a href="{$obj->mLinkToDepartmentCategoriesAdmin}">
      Trở lại ...</a> ]
  </h4>
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
{if $obj->mProductsCount eq 0}
  <p class="no-items-found">There are no products in this category!</p>
{else}
  <table class="table table-hover">
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Discounted Price</th>
      <th width="80">&nbsp;</th>
    </tr>
  {section name=i loop=$obj->mProducts}
    <tr>
      <td>{$obj->mProducts[i].name}</td>
      <td>{$obj->mProducts[i].description}</td>
      <td>{$obj->mProducts[i].price}</td>
      <td>{$obj->mProducts[i].discounted_price}</td>
      <td>
        <input type="submit"
         name="submit_edit_prod_{$obj->mProducts[i].product_id}"
         value="Edit" class="btn btn-success" />
      </td>
    </tr>
  {/section}
  </table>
{/if}
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
