{* customer_logged.tpl *}
{load_presentation_object filename="customer_logged" assign="obj"}
<div class="box">
  <p class="box-title">Xin chào , {$obj->mCustomerName}</p>
  <ul>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'account'} class="selected" {/if}
         href="{$obj->mLinkToAccountDetails}">
          Chỉnh sửa tài khoản
      </a>
    </li>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'credit-card'} class="selected" {/if}
         href="{$obj->mLinkToCreditCardDetails}">
        {$obj->mCreditCardAction} Chi tiết Card
      </a>
    </li>
    <li>
      <a {if $obj->mSelectedMenuItem eq 'address'} class="selected" {/if}
         href="{$obj->mLinkToAddressDetails}">
        {$obj->mAddressAction} Địa chỉ
      </a>
    </li>
    <li>
      <a href="{$obj->mLinkToLogout}">
        Đăng xuất
      </a>
    </li>
  </ol>
</div>
