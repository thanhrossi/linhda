{* search_box.tpl *}
{load_presentation_object filename="search_box" assign="obj"}
{* Start search box *}
<div class="box">

  <form class="search_form" method="post" action="{$obj->mLinkToSearch}">
    <p>
      <input class="input search-input" maxlength="100" id="search_string" name="search_string"
       value="{$obj->mSearchString}" size="19" placeholder="Tìm kiếm"/>
      <button type="submit" class="search-btn"  value="Go!" ><i class="fa fa-search"></i></button>
    </p>
    {* <p>
      <input type="checkbox" id="all_words" name="all_words"
       {if $obj->mAllWords == "on"} checked="checked" {/if}/>
      tìm kiếm fulltext
    </p> *}
  </form>
</div>
{* End search box *}
