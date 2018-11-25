<?php
/* Smarty version 3.1.32, created on 2018-11-25 13:56:03
  from 'D:\xampp\htdocs\cocoshop\presentation\templates\store_front.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfa9be36e8e02_52089438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e19266b2311cb3774b549c886dfa9f1f135d34b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cocoshop\\presentation\\templates\\store_front.tpl',
      1 => 1543149995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search_box.tpl' => 2,
    'file:departments_list.tpl' => 1,
  ),
),false)) {
function content_5bfa9be36e8e02_52089438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\cocoshop\\presentation\\smarty_plugins\\function.load_presentation_object.php','function'=>'smarty_function_load_presentation_object',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "site.conf", null, 0);
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"store_front",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>COCO Shop</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet"
     href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/sushikai.css" /> 
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/css/style.css" />

    
    
    <?php echo '<script'; ?>
 type="text/javascript"
     src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
scripts/ajax.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="header">
    
      <!-- HEADER -->
      <header>
        <!-- top Header -->
        <div id="top-header">
          <div class="container">
            <div class="pull-left">
              <span>Welcome to E-shop!</span>
            </div>
            <div class="pull-right">
              <ul class="header-top-links">
                <li><a href="#">Store</a></li>
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">FAQ</a></li>
                <li class="dropdown default-dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
                  <ul class="custom-menu">
                    <li><a href="#">English (ENG)</a></li>
                    <li><a href="#">Russian (Ru)</a></li>
                    <li><a href="#">French (FR)</a></li>
                    <li><a href="#">Spanish (Es)</a></li>
                  </ul>
                </li>
                <li class="dropdown default-dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
                  <ul class="custom-menu">
                    <li><a href="#">USD ($)</a></li>
                    <li><a href="#">EUR (€)</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /top Header -->

        <!-- header -->
        <div id="header">
          <div class="container">
            <div class="pull-left">
              <!-- Logo -->
              <div class="header-logo">
                <a class="logo"  href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/logoz.png" alt="">
                </a>
              </div>
              <!-- /Logo -->

              <!-- Search -->
              <div class="header-search">
              <?php $_smarty_tpl->_subTemplateRender("file:search_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
              </div>
              <!-- /Search -->
            </div>
            <div class="pull-right">
              <ul class="header-btns">
                <!-- Account -->
                <li class="header-account dropdown default-dropdown">
                  <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                    <div class="header-btns-icon">
                      <i class="fa fa-user-o"></i>
                    </div>
                    <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                  </div>
                  <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>

                  
                  <ul class="custom-menu">
                    <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                    <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                    <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                    <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                    <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                  </ul>
                </li>
                <!-- /Account -->

                <!-- Cart -->
                <li class="header-cart dropdown default-dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <div class="header-btns-icon">
                      <i class="fa fa-shopping-cart"></i>
                      <span class="qty">3</span>
                    </div>
                    <strong class="text-uppercase">My Cart:</strong>
                    <br>
                    <span>35.20$</span>
                  </a>
                  <div class="custom-menu">
                    <div id="shopping-cart">
                      <div class="shopping-cart-list">
                        <div class="product product-widget">
                          <div class="product-thumb">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/thumb-product01.jpg" alt="">
                          </div>
                          <div class="product-body">
                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                          </div>
                          <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                        </div>
                        <div class="product product-widget">
                          <div class="product-thumb">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/thumb-product01.jpg" alt="">
                          </div>
                          <div class="product-body">
                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                          </div>
                          <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                        </div>
                      </div>
                      <div class="shopping-cart-btns">
                        <button class="main-btn">View Cart</button>
                        <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- /Cart -->

                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                  <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
              </ul>
            </div>
          </div>
          <!-- header -->
        </div>
        <!-- container -->
      </header>
      <!-- /HEADER -->

      <!-- NAVIGATION -->
      <div id="navigation">
        <!-- container -->
        <div class="container">
          <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
              <span class="category-header">Categories <i class="fa fa-list"></i></span>
              <ul class="category-list">
                <li class="dropdown side-dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
                  <div class="custom-menu">
                    <div class="row">
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row hidden-sm hidden-xs">
                      <div class="col-md-12">
                        <hr>
                        <a class="banner banner-1" href="#">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner05.jpg" alt="">
                          <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                            <h3 class="white-color font-weak">HOT DEAL</h3>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="#">Men’s Clothing</a></li>
                <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
                  <div class="custom-menu">
                    <div class="row">
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 hidden-sm hidden-xs">
                        <a class="banner banner-2" href="#">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner04.jpg" alt="">
                          <div class="banner-caption">
                            <h3 class="white-color">NEW<br>COLLECTION</h3>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="#">Computer & Office</a></li>
                <li><a href="#">Consumer Electronics</a></li>
                <li class="dropdown side-dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
                  <div class="custom-menu">
                    <div class="row">
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="#">Bags & Shoes</a></li>
                <li><a href="#">View All</a></li>
              </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
              <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
              <ul class="menu-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
                  <div class="custom-menu">
                    <div class="row">
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                      </div>
                      <div class="col-md-4">
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row hidden-sm hidden-xs">
                      <div class="col-md-12">
                        <hr>
                        <a class="banner banner-1" href="#">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner05.jpg" alt="">
                          <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                            <h3 class="white-color font-weak">HOT DEAL</h3>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
                  <div class="custom-menu">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="hidden-sm hidden-xs">
                          <a class="banner banner-1" href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner06.jpg" alt="">
                            <div class="banner-caption text-center">
                              <h3 class="white-color text-uppercase">Women’s</h3>
                            </div>
                          </a>
                          <hr>
                        </div>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <div class="hidden-sm hidden-xs">
                          <a class="banner banner-1" href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner07.jpg" alt="">
                            <div class="banner-caption text-center">
                              <h3 class="white-color text-uppercase">Men’s</h3>
                            </div>
                          </a>
                        </div>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <div class="hidden-sm hidden-xs">
                          <a class="banner banner-1" href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner08.jpg" alt="">
                            <div class="banner-caption text-center">
                              <h3 class="white-color text-uppercase">Accessories</h3>
                            </div>
                          </a>
                        </div>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <div class="hidden-sm hidden-xs">
                          <a class="banner banner-1" href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/banner09.jpg" alt="">
                            <div class="banner-caption text-center">
                              <h3 class="white-color text-uppercase">Bags</h3>
                            </div>
                          </a>
                        </div>
                        <hr>
                        <ul class="list-links">
                          <li>
                            <h3 class="list-links-title">Categories</h3></li>
                          <li><a href="#">Women’s Clothing</a></li>
                          <li><a href="#">Men’s Clothing</a></li>
                          <li><a href="#">Phones & Accessories</a></li>
                          <li><a href="#">Jewelry & Watches</a></li>
                          <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="#">Sales</a></li>
                <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                  <ul class="custom-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="product-page.html">Product Details</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- menu nav -->
          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /NAVIGATION -->

      <!-- BREADCRUMB -->
      <div id="breadcrumb">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Blank</li>
          </ul>
        </div>
      </div>
      <!-- /BREADCRUMB -->
    </div>
    <div class="content">
      <div id="doc" class="yui-t2 container">
        <div id="bd">
          <div id="yui-main">
            <div class="yui-b">
              
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
              <?php $_smarty_tpl->_subTemplateRender("file:search_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
    </div>




	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
        
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo"  href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">
		            <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/img/logoz.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->
    <!-- jQuery Plugins -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/slick.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/nouislider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/jquery.zoom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
assets/frontend/js/main.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
