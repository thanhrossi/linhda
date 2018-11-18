{* customer_login.tpl *}
{load_presentation_object filename="customer_login" assign="obj"}
<div class="box">
  <p class="box-title">Đăng nhập</p>
  <form method="post" action="{$obj->mLinkToLogin}">
    {if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
    <p>
      <label for="email">Địa chỉ E-mail:</label>
      <input type="text" maxlength="50" name="email" size="22"
       value="{$obj->mEmail}" />
    </p>
    <p>
      <label for="password">Mật khẩu:</label>
      <input type="password" maxlength="50" name="password" size="22" />
    </p>
    <p>
      <input type="submit" name="Login" value="Login"  class="btn" /> |
      <a href="{$obj->mLinkToRegisterCustomer}">Bạn chưa có tài khoản?</a>
    </p>
  </form>
</div>
