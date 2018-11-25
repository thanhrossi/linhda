{* products_list.tpl *}
{load_presentation_object filename="products_list" assign="obj"}
{if $obj->mSearchDescription != ""}
  <p class="description">{$obj->mSearchDescription}</p>
{/if}


{if $obj->mProducts}

<div class="product-list clearfix" border="0">
  
  {section name=k loop=$obj->mProducts}
    {if $smarty.section.k.index % 2 == 0}
    <div class='product-row'>
    {/if}
      <div class='product-col' valign="top">
        <h3 class="product-title">
          <a href="{$obj->mProducts[k].link_to_product}">
            {$obj->mProducts[k].name}
          </a>
        </h3>
        <p>
          {if $obj->mProducts[k].thumbnail neq ""}
          
            <a href="{$obj->mProducts[k].link_to_product}">
              <span class="image-wrapper"><span style="background-image: url('{$obj->mProducts[k].thumbnail}');" 
              alt="{$obj->mProducts[k].name}" ></span>
              </span>
            </a>
          
          {/if}
         {* {$obj->mProducts[k].description} *}
        </p>
        <p class="section">
          
          {if $obj->mProducts[k].discounted_price != 0}
            <span class="price">${$obj->mProducts[k].discounted_price}</span>
            <span class="old-price">${$obj->mProducts[k].price}</span>
            
          {else}
            <span class="price">${$obj->mProducts[k].price}</span>
          {/if}
        </p>

        {* The Add to Cart form *}
        <form class="add-product-form" target="_self" method="post"
         action="{$obj->mProducts[k].link_to_add_product}"
         onsubmit="return addProductToCart(this);">

        {* Generate the list of attribute values *}
        <p class="attributes">

        {* Parse the list of attributes and attribute values *}
        {section name=l loop=$obj->mProducts[k].attributes}

          {* Generate a new select tag? *}
          {if $smarty.section.l.first ||
              $obj->mProducts[k].attributes[l].attribute_name !==
              $obj->mProducts[k].attributes[l.index_prev].attribute_name}
            {$obj->mProducts[k].attributes[l].attribute_name}:
          <select name="attr_{$obj->mProducts[k].attributes[l].attribute_name}">
          {/if}

            {* Generate a new option tag *}
            <option value="{$obj->mProducts[k].attributes[l].attribute_value}">
              {$obj->mProducts[k].attributes[l].attribute_value}
            </option>

          {* Close the select tag? *}
          {if $smarty.section.l.last ||
              $obj->mProducts[k].attributes[l].attribute_name !==
              $obj->mProducts[k].attributes[l.index_next].attribute_name}
          </select>
          {/if}

        {/section}
        </p>

        {* Add the submit button and close the form *}
        <p>
          <input type="submit" name="name="add_to_cart"  class="btn primary-btn" value="Add to Cart" />
        </p>
        </form>

      {* Show Edit button for administrators *}
      {if $obj->mShowEditButton}
        <form action="{$obj->mEditActionTarget}" target="_self"
         method="post" class="edit-form">
          <input type="hidden" name="product_id"
           value="{$obj->mProducts[k].product_id}" />
          <input type="submit" name="submit" value="Edit Product Details" class="btn edit-btn" />
        </form>
      {/if}
      </div>
    {if $smarty.section.k.index % 2 != 0 && !$smarty.section.k.first ||
        $smarty.section.k.last}
    </div>
    {/if}
  {/section}
  <!-- {$smarty.section.k.index.total } -->
  
</div>


{/if}

{if count($obj->mProductListPages) > 0}
<nav aria-label="Page navigation">
  <ul class="pagination">
    {if $obj->mLinkToPreviousPage}
    <li class="page-item"><a href="{$obj->mLinkToPreviousPage}"><<</a></li>
    {/if}

    {section name=m loop=$obj->mProductListPages}
      {if $obj->mPage eq $smarty.section.m.index_next}
      <li class="page-item active">
        <a class="page-link" href="#">{$smarty.section.m.index_next}</a>
      </li>
      {else}
      <li class="page-item"><a href="{$obj->mProductListPages[m]}">{$smarty.section.m.index_next}</a></li>
      {/if}
    {/section}

    {if $obj->mLinkToNextPage}
    <li class="page-item"><a href="{$obj->mLinkToNextPage}">>></a></li>
    {/if}
  </ul>
</nav>
{/if}
