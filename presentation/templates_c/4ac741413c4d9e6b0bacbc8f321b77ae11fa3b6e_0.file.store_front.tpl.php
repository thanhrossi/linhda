<?php
/* Smarty version 3.1.32, created on 2018-11-11 11:22:49
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\store_front.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be811099eccd6_80636366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac741413c4d9e6b0bacbc8f321b77ae11fa3b6e' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\store_front.tpl',
      1 => 1541935368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search_box.tpl' => 1,
    'file:departments_list.tpl' => 1,
  ),
),false)) {
function content_5be811099eccd6_80636366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"store_front",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>sushikai</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <link type="text/css" rel="stylesheet"
     href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/sushikai.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php echo '<script'; ?>
 type="text/javascript"
     src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
scripts/ajax.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="header" class="yui-g">
              <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
images/sushikai.jpg"
                 alt="sushikai logo" />
              </a>
            </div>
            <div id="contents" class="yui-g">
              <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
          </div>
        </div>
        <div class="yui-b">
          <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mLoginOrLoggedCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mHideBoxes) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:search_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:departments_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mCategoriesCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mCartSummaryCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php }?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
