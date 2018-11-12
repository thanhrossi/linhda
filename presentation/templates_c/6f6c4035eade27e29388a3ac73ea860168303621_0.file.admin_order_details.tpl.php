<?php
/* Smarty version 3.1.32, created on 2018-11-12 16:32:45
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\admin_order_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be9ab2d58cbd0_07763902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6c4035eade27e29388a3ac73ea860168303621' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\admin_order_details.tpl',
      1 => 1542040364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be9ab2d58cbd0_07763902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),1=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\libs\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\libs\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_load_presentation_object(array('filename'=>"admin_order_details",'assign'=>"obj"),$_smarty_tpl);?>

<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAdmin;?>
">
  <h4>
    Editing details for order ID:
    <?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['order_id'];?>
 [
    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToOrdersAdmin;?>
">back to admin orders...</a> ]
  </h4>
  <input type="hidden" name="Page" value="OrderDetails" />
  <input type="hidden" name="OrderId"
   value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['order_id'];?>
" />
  <table class="table table-hover borderless-tablez">
    <tr>
      <td class="bold-text">Total Amount: </td>
      <td class="price">
        $<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['total_amount'];?>

      </td>
    </tr>
    <tr>
      <td class="bold-text">Tax: </td>
      <td class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['tax_type'];?>
 $<?php echo $_smarty_tpl->tpl_vars['obj']->value->mTax;?>
</td>
    </tr>
    <tr>
      <td class="bold-text">Shipping: </td>
      <td class="price"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['shipping_type'];?>
</td>
    </tr>
    <tr>
      <td class="bold-text">Date Created: </td>
      <td>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['created_on'],"%Y-%m-%d %T");?>

      </td>
    </tr>
    <tr>
      <td class="bold-text">Date Shipped: </td>
      <td>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['shipped_on'],"%Y-%m-%d %T");?>

      </td>
    </tr>
    <tr>
      <td class="bold-text">Status: </td>
      <td>
        <select name="status" class="custom-select"
         <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> >
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['obj']->value->mOrderStatusOptions,'selected'=>$_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['status']),$_smarty_tpl);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="bold-text">Authorization Code: </td>
      <td>
        <input name="authCode" type="text" class="form-control" size="50"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['auth_code'];?>
"
         <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
      <td>
    </tr>
    <tr>
      <td class="bold-text">Reference Number: </td>
      <td>
        <input name="reference" class="form-control" type="text" size="50"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['reference'];?>
"
         <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
      <td>
    </tr>
    <tr>
      <td class="bold-text">Comments: </td>
      <td>
        <input name="comments" class="form-control" type="text" size="50"
         value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderInfo['comments'];?>
"
         <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
      <td>
    </tr>
    <tr>
      <td class="bold-text">Customer Name: </td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['name'];?>
</td>
    </tr>
    <tr>
      <td class="bold-text" valign="top">Shipping Address: </td>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['address_1'];?>
<br />
        <?php if ($_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['address_2']) {?>
          <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['address_2'];?>
<br />
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['city'];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['region'];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['postal_code'];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['country'];?>
<br />
      </td>
    </tr>
    <tr>
      <td class="bold-text">Customer Email: </td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerInfo['email'];?>
</td>
    </tr>
  </table>
  <p>
    <input type="submit" name="submitEdit" value="Edit" class="btn btn-primary"
     <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
    <input type="submit" name="submitUpdate" value="Update" class="btn"
     <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
    <input type="submit" name="submitCancel" value="Cancel"  class="btn btn-dark"
     <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mEditEnabled) {?> disabled="disabled" <?php }?> />
    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mProcessButtonText) {?>
    <input type="submit" name="submitProcessOrder"
     value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mProcessButtonText;?>
" />
    <?php }?>
  </p>
  <h4>Order contains these products:</h4>
  <table class="table table-hover">
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Quantity</th>
      <th>Unit Cost</th>
      <th>Subtotal</th>
    </tr>
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mOrderDetails) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_id'];?>
</td>
      <td>
        <?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_name'];?>

        (<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['attributes'];?>
)
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
</td>
      <td>$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['unit_cost'];?>
</td>
      <td>$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mOrderDetails[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['subtotal'];?>
</td>
    </tr>
  <?php
}
}
?>
  </table>
  <h4>Order audit trail:</h4>
  <table class="table table-hover">
    <tr>
      <th>Audit ID</th>
      <th>Created On</th>
      <th>Code</th>
      <th>Message</th>
    </tr>
  <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['obj']->value->mAuditTrail) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAuditTrail[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['audit_id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAuditTrail[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['created_on'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAuditTrail[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['code'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mAuditTrail[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['message'];?>
</td>
    </tr>
  <?php
}
}
?>
  </table>
</form>
<?php }
}
