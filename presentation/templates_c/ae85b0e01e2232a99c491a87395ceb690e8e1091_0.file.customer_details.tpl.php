<?php
/* Smarty version 3.1.32, created on 2018-05-12 22:41:09
  from 'C:\xampp\htdocs\sushikai\presentation\templates\customer_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af7cff5e6f9c0_24401718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae85b0e01e2232a99c491a87395ceb690e8e1091' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sushikai\\presentation\\templates\\customer_details.tpl',
      1 => 1526165438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af7cff5e6f9c0_24401718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_details",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAccountDetails;?>
">
  <h2>Please enter your details:</h2>
  <table class="customer-table">
    <tr>
      <td>E-mail Address:</td>
      <td>
        <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEmail;?>
"
         <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditMode) {?>readonly="readonly"<?php }?> size="32" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmailAlreadyTaken) {?>
        <p class="error">A user with that e-mail address already exists.</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmailError) {?>
        <p class="error">You must enter an e-mail address.</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Name:</td>
      <td>
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mName;?>
" size="32" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mNameError) {?>
        <p class="error">You must enter your name.</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Password:</td>
      <td>
        <input type="password" name="password" size="32" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPasswordError) {?>
        <p class="error">You must enter a password.</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Re-enter Password:</td>
      <td>
        <input type="password" name="passwordConfirm" size="32" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPasswordConfirmError) {?>
        <p class="error">You must re-enter your password.</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['obj']->value->mPasswordMatchError) {?>
        <p class="error">You must re-enter the same password.</p>
        <?php }?>
      </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditMode) {?>
    <tr>
      <td>Day phone:</td>
      <td>
        <input type="text" name="dayPhone" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDayPhone;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Eve phone:</td>
      <td>
        <input type="text" name="evePhone" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEvePhone;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Mob phone:</td>
      <td>
        <input type="text" name="mobPhone" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mMobPhone;?>
"
         size="32" />
      </td>
    </tr>
    <?php }?>
  </table>
  <input type="submit" name="sended" value="Confirm" /> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCancelPage;?>
">Cancel</a>
</form>
<?php }
}
