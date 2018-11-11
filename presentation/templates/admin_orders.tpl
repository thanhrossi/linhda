{* admin_orders.tpl *}
{load_presentation_object filename="admin_orders" assign="obj"}
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
<form method="get" action="{$obj->mLinkToAdmin}" class="cc">
  <input name="Page" type="hidden" value="Orders" />
  <p>
    <font class="bold-text">Show orders by customer</font>
    <select name="customer_id"  class="custom-select">
    {section name=i loop=$obj->mCustomers}
      <option value="{$obj->mCustomers[i].customer_id}"
       {if $obj->mCustomers[i].customer_id == $obj->mCustomerId}
         selected="selected"
       {/if}>
        {$obj->mCustomers[i].name}
      </option>
    {/section}
    </select>
    <input type="submit" class="btn btn-primary"  name="submitByCustomer" value="Go!" />
  </p>
  <p>
    <font class="bold-text">Get by order ID</font>
    <input name="orderId"  type="text" class="form-control"  value="{$obj->mOrderId}" />
    <input type="submit" class="btn btn-primary"  name="submitByOrderId" value="Go!" />
  </p>
  <p>
    <font class="bold-text">Show the most recent</font>
    <input name="recordCount"  type="text" class="form-control"  value="{$obj->mRecordCount}" />
    <font class="bold-text">orders</font>
    <input type="submit" class="btn btn-primary"  name="submitMostRecent" value="Go!" />
  </p>
  <p>
    <font class="bold-text">Show all records created between</font>
    <input name="startDate"  type="text" class="form-control"  value="{$obj->mStartDate}" />
    <font class="bold-text">and</font>
    <input name="endDate"  type="text" class="form-control"  value="{$obj->mEndDate}" />
    <input type="submit" class="btn btn-primary"  name="submitBetweenDates" value="Go!" />
  </p>
  <p>
    <font class="bold-text">Show orders by status</font>
    {html_options name="status" class="custom-select" options=$obj->mOrderStatusOptions
     selected=$obj->mSelectedStatus}
    <input type="submit" class="btn btn-primary"  name="submitOrdersByStatus" value="Go!" />
  </p>
</form>
{if $obj->mOrders}
<table class="table table-hover">
  <tr>
   <th>Order ID</th>
   <th>Date Created</th>
   <th>Date Shipped</th>
   <th>Status</th>
   <th>Customer</th>
   <th>&nbsp;</th>
  </tr>
  {section name=i loop=$obj->mOrders}
    {assign var=status value=$obj->mOrders[i].status}
  <tr>
    <td>{$obj->mOrders[i].order_id}</td>
    <td>{$obj->mOrders[i].created_on|date_format:"%Y-%m-%d %T"}</td>
    <td>{$obj->mOrders[i].shipped_on|date_format:"%Y-%m-%d %T"}</td>
    <td>{$obj->mOrderStatusOptions[$status]}</td>
    <td>{$obj->mOrders[i].name}</td>
    <td align="right">
      <a href="{$obj->mOrders[i].link_to_order_details_admin}">View Details</a>
    </td>
  </tr>
  {/section}
</table>
{/if}
