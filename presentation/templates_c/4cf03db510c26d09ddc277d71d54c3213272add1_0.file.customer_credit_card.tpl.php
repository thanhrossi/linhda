<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:14:58
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\customer_credit_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be80f328f7454_47320168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf03db510c26d09ddc277d71d54c3213272add1' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\customer_credit_card.tpl',
      1 => 1490817182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be80f328f7454_47320168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"customer_credit_card",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCreditCardDetails;?>
">
  <h2>Please enter your credit card details:</h2>
  <table class="customer-table">
    <tr>
      <td>Card Holder:</td>
      <td>
        <input type="text" name="cardHolder" size="32"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['card_holder'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCardHolderError) {?>
        <p class="error">You must enter a card holder.</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Card Number (digits only):</td>
      <td>
        <input type="text" name="cardNumber" size="32"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['card_number'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCardNumberError) {?>
        <p class="error">You must enter a card number.</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Expiry Date (MM/YY):</td>
      <td>
        <input type="text" name="expDate" size="32"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['expiry_date'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mExpDateError) {?>
        <p class="error">You must enter an expiry date</p>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Issue Date (MM/YY if applicable):</td>
      <td>
        <input type="text" name="issueDate" size="32"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['issue_date'];?>
" />
      </td>
    </tr>
    <tr>
      <td>Issue Number (if applicable):</td>
      <td>
        <input type="text" name="issueNumber" size="32"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['issue_number'];?>
" />
      </td>
    </tr>
    <tr>
      <td>Card Type:</td>
      <td>
        <select name="cardType">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['obj']->value->mCardTypes,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mPlainCreditCard['card_type']),$_smarty_tpl);?>

        </select>
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCardTypesError) {?>
        <p class="error">You must enter a card type.</p>
        <?php }?>
      </td>
    </tr>
  </table>
  <input type="submit" name="sended" value="Confirm" /> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCancelPage;?>
">Cancel</a>
</form>
<?php }
}
