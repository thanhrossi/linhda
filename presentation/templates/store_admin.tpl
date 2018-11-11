{load_presentation_object filename="store_admin" assign="obj"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>sushikai_admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="{$obj->mSiteUrl}styles/tshirtshop.css" type="text/css"
     rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="{$obj->mSiteUrl}assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{$obj->mSiteUrl}assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{$obj->mSiteUrl}assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{$obj->mSiteUrl}assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{$obj->mSiteUrl}assets/css/demo.css" rel="stylesheet" />   
    </head>
  <body>
    

    <div class="wrapper">
        <div class="sidebar" data-image="{$obj->mSiteUrl}assets/img/sidebar-5.jpg">
          
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
                {include file=$obj->mMenuCell}
                
            </div>
        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> CocoShop </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-body ">
                                    {include file=$obj->mContentsCell}
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
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Linh Nguyen</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
  </body>
  <script src="{$obj->mSiteUrl}assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="{$obj->mSiteUrl}assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{$obj->mSiteUrl}assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{$obj->mSiteUrl}assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Chartist Plugin  -->
  <script src="{$obj->mSiteUrl}assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{$obj->mSiteUrl}assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
  <script src="{$obj->mSiteUrl}assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
  <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
  <script src="{$obj->mSiteUrl}assets/js/demo.js"></script>
</html>
