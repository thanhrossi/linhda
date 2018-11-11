{* first_page_contents.tpl *}
{load_presentation_object filename="first_page_contents" assign="obj"}
<p class="description">
  Chúng tôi hi vọng sẽ mang đến cho quý khách những bữa ăn tuyệt vời nhất mang hương vị của xứ sở Nhật Bản!!!
</p>
<p class="description">
  Ở đâu có các bạn, ở đó có SushiKai!
</p>
<p><a href="{$obj->mLinkToAdmin}">Đăng nhập admin</a>.</p>
{include file="products_list.tpl"}
