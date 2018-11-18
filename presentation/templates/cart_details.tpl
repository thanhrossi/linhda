{* cart_details.tpl *}
{load_presentation_object filename="cart_details" assign="obj"}
<div id="updating">Updating...</div>
{if $obj->mIsCartNowEmpty eq 1}
<h3>Your shopping cart is empty!</h3>
{else}

<form class="cart-form" method="post" action="{$obj->mUpdateCartTarget}"
 onsubmit="return executeCartAction(this);">
  
  <div class="order-summary clearfix">
    <div class="section-title">
      <h3 class="title">Order Review</h3>
    </div>
    <table class="shopping-cart-table table">
      <thead>
        <tr>
          <th>Product</th>
          <th></th>
          <th class="text-center">Price</th>
          <th class="text-center">Quantity</th>
          <th class="text-center">Total</th>
          <th class="text-right"></th>
        </tr>
      </thead>
      <tbody>
      {section name=i loop=$obj->mCartProducts}
      <tr>
        <td class="details">
          <input name="itemId[]" type="hidden"
          value="{$obj->mCartProducts[i].item_id}" />
          <a >{$obj->mCartProducts[i].name}</a>
          <ul>
              <li><span>{$obj->mCartProducts[i].attributes}</span></li>
          </ul>
          
        </td>
        <td class="price text-center">${$obj->mCartProducts[i].price}</td>
        <td class="qty text-center">
          <input type="text" name="quantity[]" size="5"
          value="{$obj->mCartProducts[i].quantity}" class="input" />
        </td>
        <td class="total text-center"><strong class="primary-color">${$obj->mCartProducts[i].subtotal}</strong></td>
        <td class="text-right">
          <a href="{$obj->mCartProducts[i].save}"
          onclick="return executeCartAction(this);">Save for later</a>
          <a href="{$obj->mCartProducts[i].remove}" class="main-btn icon-btn"
          onclick="return executeCartAction(this); "><i class="fa fa-close"></i></a>
        </td>
      </tr>
    {/section}
        
        
      </tbody>
      <tfoot>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>SUBTOTAL</th>
          <th colspan="2" class="sub-total">${$obj->mTotalAmount}</th>
        </tr>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>SHIPING</th>
          <td colspan="2">Free Shipping</td>
        </tr>
        <tr>
          <th class="empty" colspan="3"></th>
          <th>TOTAL</th>
          <th colspan="2" class="total">${$obj->mTotalAmount}</th>
        </tr>
      </tfoot>
    </table>
    <div class="pull-right">
      {*<button class="primary-btn" href="{$obj->mLinkToCheckout}">Place Order</button>*}
      <input class="btn edit-btn" type="submit" name="update" value="Update" />
      {if $obj->mShowCheckoutLink}
        <a  class="primary-btn" href="{$obj->mLinkToCheckout}">Đặt hàng</a>
      {/if}
    </div>
  </div>
</form>
{/if}
{if ($obj->mIsCartLaterEmpty eq 0)}
<h3>Thêm vào mua sau:</h3>
<table class="shopping-cart-table table">
  <tr>
    <th>Tên đồ ăn</th>
    <th>Giá</th>
    <th>&nbsp;</th>
  </tr>
  {section name=j loop=$obj->mSavedCartProducts}
  <tr>
    <td class="details">
      {$obj->mSavedCartProducts[j].name}
      ({$obj->mSavedCartProducts[j].attributes})
    </td>
    <td>
      ${$obj->mSavedCartProducts[j].price}
    </td>
    <td>
        <a href="{$obj->mSavedCartProducts[j].move}"
         onclick="return executeCartAction(this);">Chuyển mua sau</a>
        <a href="{$obj->mSavedCartProducts[j].remove}"
         onclick="return executeCartAction(this);">Xóa khỏi giỏ</a>
    </td>
  </tr>
  {/section}
</table>
{/if}
{if $obj->mLinkToContinueShopping}
<p><a href="{$obj->mLinkToContinueShopping}">Tiếp tục mua hàng </a></p>
{/if}
{if $obj->mRecommendations}
<h2>Sản phẩm đi kèm:</h2>
<ol>
  {section name=m loop=$obj->mRecommendations}
  <li>
    {strip}
    <a href="{$obj->mRecommendations[m].link_to_product}">
      {$obj->mRecommendations[m].product_name}
    </a>
    {/strip}
    <span class="list"> - {$obj->mRecommendations[m].description}</span>
  </li>
  {/section}
</ol>
{/if}
