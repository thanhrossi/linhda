{* admin_login.tpl *}
{load_presentation_object filename="admin_login" assign="obj"}
<div class="login">
  <h3 class="login-title">Login</h3>
  <div class="row">
    <form method="post" action="{$obj->mLinkToAdmin}">
    <div class="col-md-12">
      <p>
        Enter login information or go back to
        <a href="{$obj->mLinkToIndex}">storefront</a>.
      </p>
    {if $obj->mLoginMessage neq ""}
        <p class="error">{$obj->mLoginMessage}</p>
    {/if}
        <p>
          <label for="username">Username:</label>
          <input type="text" name="username" size="35" value="{$obj->mUsername}"  class="form-control"/>
        </p>
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password" size="35" value="" class="form-control"/>
        </p>
        <p>
          <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
        </p>
      </form>
    </div>
  </div>
  
</div>
