{* admin_menu.tpl *}
{load_presentation_object filename="admin_menu" assign="obj"}


<ul class="nav">
  <li class="nav-item">
      <a class="nav-link" href="{$obj->mLinkToStoreAdmin}">
          <i class="nc-icon nc-chart-pie-35"></i>
          <p>CATALOG ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="{$obj->mLinkToAttributesAdmin}">
          <i class="nc-icon nc-circle-09"></i>
          <p>PRODUCTS ATTRIBUTES ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="{$obj->mLinkToCartsAdmin}">
          <i class="nc-icon nc-notes"></i>
          <p>CARTS ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link"  href="{$obj->mLinkToOrdersAdmin}">
          <i class="nc-icon nc-paper-2"></i>
          <p>ORDERS ADMIN</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="{$obj->mLinkToStoreFront}">
          <i class="nc-icon nc-atom"></i>
          <p>STOREFRONT</p>
      </a>
  </li>
  <li>
      <a class="nav-link" href="{$obj->mLinkToLogout}">
          <i class="nc-icon nc-pin-3"></i>
          <p>LOGOUT</p>
      </a>
  </li>

  
</ul>