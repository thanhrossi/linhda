<?php
/* Smarty version 3.1.32, created on 2018-11-11 14:22:42
  from 'C:\Program Files (x86)\Ampps\www\sushikai\presentation\templates\store_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be83b323b6f35_82539878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8021b09330a1b646df55d5c89c800a4d97b58427' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\sushikai\\presentation\\templates\\store_admin.tpl',
      1 => 1541946160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be83b323b6f35_82539878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\ProgramFiles(x86)\\Ampps\\www\\sushikai\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
echo smarty_function_load_presentation_object(array('filename'=>"store_admin",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>sushikai_admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/tshirtshop.css" type="text/css"
     rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/css/demo.css" rel="stylesheet" />   
    </head>
  <body>
    

    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/img/sidebar-5.jpg">
          
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Coco Shop
                    </a>
                </div>
                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mMenuCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                
            </div>
        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-body ">
                                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['obj']->value->mContentsCell, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        
                                    </div>
                                    <hr>
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        
                        <p class="copyright text-center">
                            ©
                            <?php echo '<script'; ?>
>
                                document.write(new Date().getFullYear())
                            <?php echo '</script'; ?>
>
                            <a href="#">Linh Nguyen</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
  </body>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/core/jquery.3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/core/popper.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/core/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/plugins/bootstrap-switch.js"><?php echo '</script'; ?>
>
  <!--  Google Maps Plugin    -->
  <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"><?php echo '</script'; ?>
>
  <!--  Chartist Plugin  -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/plugins/chartist.min.js"><?php echo '</script'; ?>
>
  <!--  Notifications Plugin    -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/plugins/bootstrap-notify.js"><?php echo '</script'; ?>
>
  <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"><?php echo '</script'; ?>
>
  <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/js/demo.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
