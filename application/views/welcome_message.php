<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>盈波网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Required -->
    <link href="css/global-style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="icon" href="images/favicon.png" type="image/png"><!-- LayerSlider stylesheet -->
    <link rel="stylesheet" href="css/layerslider.css" type="text/css">
    
</head>
<body>

<?php include_once 'menu.php';?>

<div class="wrapper">
	<!-- This section is only for demonstration purpose only. Just remove the div "divStyleSwitcher" -->
<div id="divStyleSwitcher" class="style-switcher-slidebar">
	<a href="#" id="cmdShowStyleSwitcher" class="open-panel"><i class="fa fa-cog"></i></a>
	<div class="switch-panel">
    	<h3>Boomerang - Style Builder</h3>
        <div class="panel-section">
        	<label>How do you prefer it?</label>
        	<div class="row">
            	<div class="col-xs-12">
                	<div class="form-group">
                        <select id="cmbLayout" class="form-control">
                            <option value="1">Fluid</option>
                            <option value="2">Boxed</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>                            
        <div class="panel-section">
        	<div class="row">
                <div class="col-xs-12">
                	<div class="form-group">
                    	<label>Navigation Style</label>
                        <select id="cmbNavigationStyle" class="form-control" title="This will change the navbar dropdown style">
                            <option value="1">White</option>
                            <option value="2">Contrasted</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>     
        <div class="panel-section">
        	<div class="row">
                <div class="col-xs-12">
                	<label>Pattern/Bckg</label>
                    <select id="cmbBackground" class="form-control">
                        <option value="1">Pattern 1</option>
                        <option value="2">Pattern 2</option>
                        <option value="3">Pattern 3</option>
                        <option value="4">Pattern 4</option>
                        <option value="5">Background 1</option>
                        <option value="6">Background 2</option>
                    </select>
                </div>
            </div>
        </div>       
        <hr />                                   
        <div class="panel-section">
        	<div class="form-group">
            	<label>Choose your favourite color</label>
            	<span class="color-picker">
                    <a href="#" id="cmdRed" class="color-red" title="Red">Red</a>
                    <a href="#" id="cmdViolet" class="color-violet" title="Violet">Violet</a>
                    <a href="#" id="cmdBlue" class="color-blue" title="Blue">Blue</a>
                    <a href="#" id="cmdGreen" class="color-green" title="Green">Green</a>
                    <a href="#" id="cmdYellow" class="color-yellow" title="Yellow">Yellow</a>
                    <a href="#" id="cmdOrange" class="color-orange" title="Orange">Orange</a>
                </span>
            </div>
        </div>
    </div>
</div><!-- Top Header -->
<div class="top-header">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<span class="aux-text hidden-xs">
                    Welcome to Boomerang: hello@webpixels.ro or +40 724 123 456
                </span>
            	<nav class="top-header-menu">
                    <ul class="menu">
                        <li><a href="sign-in.html">Login</a></li>
                        <li class="aux-languages dropdown animate-hover" data-animate="animated fadeInUp"><a href="#"><span class="language name">English</span></a>
                            <ul id="auxLanguages" class="sub-menu animate-wr">
                                <li><a href="#"><span class="language">German</span></a></li>
                                <li><span class="language language-active">English</span></li>
                                <li><a href="#"><span class="language">Greek</span></a></li>
                                <li><a href="#"><span class="language">Spanish</span></a></li>
                            </ul>
                        </li>
                        <li class="shopping-cart dropdown animate-hover" data-animate="animated fadeInUp">
                            <a href="shop-cart.html" title="View your shopping cart" style="padding-right:0;"><i class="fa fa-shopping-cart"></i><span class="amount">&pound;0</span></a>
                
                            <ul class="sub-menu animate-wr">     
                                <li>                                      
                                    <div class="dropdown-cart">
                                        <span class="cart-items">You have <strong>3</strong> items in your cart</span>
                                        <table class="table table-cart">
                                            <tbody>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                    <th class="text-center">Qty</th>
                                                    <th>Total</th>
                                                </tr>
                                            
                                                <tr>
                                                    <td><img src="images/prv/product-3.png" class="img-center" alt=""></td>
                                                    <td><a href="">Asus Ultra Notebook</a></td>
                                                    <td class="text-center">2</td>
                                                    <td>$600.99</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/prv/product-2.png" class="img-center" alt=""></td>
                                                    <td><a href="">Mouse Microsoft</a></td>
                                                    <td class="text-center">3</td>
                                                    <td>$600.99</td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/prv/product-4.png" class="img-center" alt=""></td>
                                                    <td><a href="">Samsung Galaxy S4</a></td>
                                                    <td class="text-center">1</td>
                                                    <td>$600.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="shop-cart.html" class="btn btn-xs btn-three">Edit cart</a>

                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-xs btn-two pull-right">Proceed to checkout</a>
                                                <span class="clearfix"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                                                                                    
                            </ul>                                                                                                          
                        </li>
                    </ul>
				</nav>
            </div>
        </div>
    </div>
</div>
<!-- Header: Logo and Main Nav -->
<header>    
	<div id="navOne" class="navbar navbar-wp" role="navigation">
        <div class="container">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                    <i class="fa fa-outdent icon-custom"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" title="Boomerang | One template. Infinite solutions">
                	<img src="images/boomerang-logo-dark.png" alt="Boomerang | One template. Infinite solutions">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                	<li class="active">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Homepage: Default</a></li>
                            <li><a href="index2.html">Homepage: Simple</a></li>
                            <li><a href="index4.html">Homepage: Corporate</a></li>
                            <li><a href="slider-layer.html">Homepage: Presentation</a></li>
                            <li><a href="index5.html">Homepage: Portfolio fluid</a></li>
                            <li><a href="index6.html">Homepage: Portfolio boxed</a></li>
                            <li><a href="shop-home.html">Homepage: Shop</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About us: One</a></li>
                            <li><a href="about2.html">About us: Two</a></li>
                            <li><a href="services.html">Services: One</a></li>
                            <li><a href="services2.html">Services: Two</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-member.html">Team member</a></li>
                            <li><a href="listings.html">Listings</a></li>
                            <li><a href="pricing.html">Pricing plans</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="sign-in.html">Sign in</a></li>
                            <li><a href="sign-up.html">Sign up</a></li>
                            <li><a href="shop-account.html">Sign in/Sign up</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Elements</a>
                        <ul class="dropdown-menu">
                        	<li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Shortcodes</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="wp-sc-accordion.html">Accordion</a></li>
                                    <li><a tabindex="-1" href="wp-sc-alerts.html">Alerts</a></li>
                                    <li><a tabindex="-1" href="wp-sc-buttons.html">Buttons</a></li>
                                    <li><a tabindex="-1" href="wp-sc-carousels.html">Carousels</a></li>
                                    <li><a tabindex="-1" href="wp-sc-columns.html">Columns</a></li>
                                    <li><a tabindex="-1" href="wp-sc-boxes.html">Content boxes</a></li>
                                    <li><a tabindex="-1" href="wp-sc-callout.html">Callout boxes</a></li>
                                    <li><a tabindex="-1" href="wp-sc-gmap.html">Google maps</a></li>
                                    <li><a tabindex="-1" href="wp-sc-lists.html">Lists</a></li>
                                    <li><a tabindex="-1" href="wp-sc-pagination.html">Pagination</a></li>
                                    <li><a tabindex="-1" href="wp-sc-tabs.html">Tabs</a></li>
                                </ul>
                           	</li>
                        	<li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Sliders</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="slider-layer.html">Layer Slider</a></li>
                                    <li><a tabindex="-1" href="slider-fraction.html">Fraction Slider</a></li>
                                    <li><a tabindex="-1" href="slider-bootstrap.html">Bootstrap Carousel</a></li>
                                </ul>
                           	</li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Headers</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="header-example1.html">Header: One</a></li>
                                    <li><a tabindex="-1" href="header-example2.html">Header: Two</a></li>
                                    <li><a tabindex="-1" href="header-example3.html">Header: Three</a></li>
                                    <li><a tabindex="-1" href="header-example4.html">Header: Four</a></li>
                                </ul>
                           	</li>
                            <li><a href="wp-typography.html">Typography</a></li>
                            <li><a href="wp-features.html">Features</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Portfolio</a>
                        <ul class="dropdown-menu dropdown-megamenu">
                        	<li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Gallery n/space</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="work12.html">Two columns boxed</a></li>
                                    <li><a tabindex="-1" href="work10.html">Three columns boxed</a></li>
                                    <li><a tabindex="-1" href="work11.html">Four columns boxed</a></li>
                                    <li><a tabindex="-1" href="work7.html">Three columns fluid</a></li>
                                    <li><a tabindex="-1" href="work8.html">Four columns fluid</a></li>
                                    <li><a tabindex="-1" href="work9.html">Five columns fluid</a></li>
                                </ul>
                           	</li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Gallery w/space</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="work6.html">Two columns</a></li>
                                    <li><a tabindex="-1" href="work.html">Three columns</a></li>
                                    <li><a tabindex="-1" href="work2.html">Four columns</a></li>
                                    <li><a tabindex="-1" href="work3.html">Three columns w/header</a></li>
                                    <li><a tabindex="-1" href="work4.html">Four columns w/header</a></li>
                                </ul>
                           	</li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Single project</a>
                                <ul class="dropdown-menu">
                                	<li><a tabindex="-1" href="work-project.html">Single project fluid</a></li>
                                    <li><a tabindex="-1" href="work-project2.html">Single project vertical</a></li>
                                </ul>
                           	</li>
                            <li><a tabindex="-1" href="#">Make your own</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-grid.html">Blog: Grid Large</a></li>
                            <li><a href="blog-grid2.html">Blog: Grid Medium</a></li>
                            <li><a href="blog-list.html">Blog: List</a></li>
                            <li><a href="blog-masonry.html">Blog: Masonry </a></li>
                            <li><a href="blog-post.html">Post: Standard</a></li>
                            <li><a href="blog-post2.html">Post: Fluid</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop-home.html">Homepage</a></li>
                            <li><a href="shop-products.html">All products</a></li>
                            <li><a href="shop-product.html">Single product</a></li>
                            <li><a href="shop-cart.html">Cart</a></li>
                            <li><a href="shop-account.html">Account</a></li>
                            <li><a href="shop-profile.html">User profile</a></li>
                            <li><a href="shop-order-history.html">Order history</a></li>
                            <li><a href="shop-wishlist.html">Whishlist</a></li>
                            <li><a href="shop-invoice.html">Invoice</a></li>
                        </ul>
                	</li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">Contact</a>
                        <ul class="dropdown-menu">
                            <li><a href="contact.html">Contact: One</a></li>
                            <li><a href="contact2.html">Contact: Two</a></li>
                        </ul>
                	</li>
                    <li class="dropdown animate-click" data-animate="animated fadeInUp" style="z-index:500;">
                    	<a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu dropdown-menu-user animate-wr">
                            <li id="dropdownForm">
                            	<div class="dropdown-form">
                                	<form class="form-default form-inline p-15">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="What do you want to find?">
                                            <span class="input-group-btn">
                                                <button class="btn btn-two" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                	</li>
                    <li class="hidden-xs">
                        <a href="#" id="cmdAsideMenu" class="dropdown-toggle dropdown-form-toggle" title="Open sidebar">
                        	<i class="fa fa-outdent"></i>
                        </a>
                    </li>
                </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>    <section id="slider-wrapper" class="layer-slider-wrapper">
    <div id="layerslider" style="width:100%;height:500px;">        
        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
        	<!-- slide background -->
            <img src="images/slider/fw-1.jpg" class="ls-bg" alt="Slide background"/>
            
            <!-- Right Image -->
            <img src="images/prv/human-img-1.png" class="ls-l" style="top:58%; left:70%;" data-ls="offsetxin:0;offsetyin:250;durationin:950;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" alt="Image layer">
            
            <!-- Left Text -->
            <h3 class="ls-l title" style="width:500px; top:25%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">Let your imagination run wild with Boomerang</h3>
            <h3 class="ls-l subtitle" style="top:40%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">One template. Infinite solutions</h3>
            <p class="ls-l text-standard" style="width:500px; top:55%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:2500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            Boomerang is a multi-purpose business template loaded with shortcodes and many features that can be perfectly adapted for any idea. 
            Get now the fully updated and ready to run template that will ease you work in no time.
            </p>
            <a href="https://wrapbootstrap.com/theme/boomerang-multipurpose-template-WB021609D" class="btn btn-two btn-lg ls-l" style="top:75%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:3500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" target="_blank">Purchase Boomerang</a>
        </div>
        
        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
        	<!-- slide background -->
            <img src="images/slider/fw-1.jpg" class="ls-bg" alt="Slide background"/>
            
            <!-- Right Image -->
            <img src="images/prv/human-img-4.png" class="ls-l" style="top:48%; left:70%;" data-ls="offsetxin:0;offsetyin:250;durationin:950;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" alt="Image layer">
            
            <!-- Left Text -->
            <h3 class="ls-l title" style="width:500px; top:15%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">Boomerang. New update</h3>
            <h3 class="ls-l list-item" style="top:28%; left:80px;" data-ls="offsetxin: left; rotatein: 90;durationin:1000;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            	<i class="fa fa-check-circle-o"></i> New features available
            </h3>
            <h3 class="ls-l list-item" style="top:35%; left:80px;" data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:2000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            	<i class="fa fa-check-circle-o"></i> New sliders. Check'em out
            </h3>
            <h3 class="ls-l list-item" style="top:42%; left:80px;" data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:2500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            	<i class="fa fa-check-circle-o"></i> New header and navigation styles
            </h3>
            <h3 class="ls-l list-item" style="top:49%; left:80px;" data-ls="offsetxin: left; rotatein: 90;durationin:1000;durationin:1000;delayin:3000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            	<i class="fa fa-check-circle-o"></i> Full documentation. Customization made easier
            </h3>
            <p class="ls-l text-standard" style="width:500px; top:65%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:3500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;">
            Boomerang is a multi-purpose business template loaded with shortcodes and many features that can be perfectly adapted for any idea. 
            Get now the fully updated and ready to run template that will ease you work in no time.
            </p>
            <a href="https://wrapbootstrap.com/theme/boomerang-multipurpose-template-WB021609D" class="btn btn-two btn-lg ls-l" style="top:84%; left:80px;" data-ls="offsetxin:0;offsetyin:250;durationin:1000;delayin:4000;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" target="_blank">Learn more</a>
        </div>
    </div>
</section>    
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-desktop"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>Mobile ready</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-code"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>40+ Prebuild pages</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>SEO Optimized</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-wrench"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>Modern standard pages</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>Loaded with shortcodes</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="aside-feature">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icon-feature">
                                        <i class="fa fa-plane"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4>Shop clean layout</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice bg-5">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                    	<h3 class="section-title">Our expertise</h3>
                    	<div class="widget">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                        Web design
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                    <p>
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                        Software development
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                                    <div class="panel-body">
                                      <p>
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="">
                                        Search engine optimization
                                      </a>
                                    </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse in" style="height: auto;">
                                    <div class="panel-body">
                                      <p>
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        
                        <h3 class="section-title">We are good at</h3>
                        <div class="widget">
                        	<div class="progress progress-striped">
                                <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">Web Design</span>
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                <span class="sr-only">PHP Development</span>
                                </div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-two" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">jQuery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                    	<h3 class="section-title">Featured portfolio projects</h3>
                    	<div class="w-section inverse work work-no-space g3 no-margin animate-hover-slide">
                            <div class="mix category_1" data-cat="1">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-1.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-1.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_2" data-cat="2">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-2.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-2.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_3" data-cat="3">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-3.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-3.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_4" data-cat="4">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-4.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-4.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_5" data-cat="5">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-5.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-5.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_6" data-cat="6">
                                <div class="w-box inverse">
                                    <div class="figure">
            
                                        <img alt="" src="images/prv/wk-big-img-6.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-6.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_7" data-cat="7">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-7.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-7.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_8" data-cat="8">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-8.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-8.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix category_9" data-cat="9">
                                <div class="w-box inverse">
                                    <div class="figure">
                                        <img alt="" src="images/prv/wk-big-img-1.jpg" class="img-responsive">
                                        <div class="figcaption bg-2"></div>
                                        <div class="figcaption-btn">
                                            <a href="images/prv/wk-big-img-1.jpg" class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> Zoom</a>
                                            <a href="#" class="btn btn-xs btn-one"><i class="fa fa-link"></i> View</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
            			</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice bg-banner-2 animate-in-view">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4><i class="fa fa-bar-chart-o fa-4x"></i></h4>
                            <h2>UI Elements and Shortcodes for a more dynamic content</h2>
                            
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="pie-chart" data-percent="91" data-color="e74c3c">
                                        <span class="percent"></span>
                                        <div class="chart-text">
                                            <h3>Business ready</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="pie-chart" data-percent="23" data-color="2ecc71">
                                        <span class="percent"></span>
                                        <div class="chart-text">
                                            <h3>Business ready</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="pie-chart" data-percent="68" data-color="3498db">
                                        <span class="percent"></span>
                                        <div class="chart-text">
                                            <h3>Business ready</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="pie-chart" data-percent="68" data-color="3498db">
                                        <span class="percent"></span>
                                        <div class="chart-text">
                                            <h3>Business ready</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="section-title"><span>Our services</span></h3>
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active"><a href="#tab2-1" data-toggle="tab">Web Design</a></li>
                                    <li><a href="#tab2-2" data-toggle="tab">Coding</a></li>
                                    <li><a href="#tab2-3" data-toggle="tab">Consulting</a></li>
                                    <li><a href="#tab2-4" data-toggle="tab">Marketing</a></li>
                                </ul>
                                <div class="tab-content tab-content-inverse">
                                    <div class="tab-pane active" id="tab2-1">
                                        <p>
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                        </p>
                                        <p>
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="tab2-2">
                                        <p>
                                       Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                        </p>
                                        <p>
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="tab2-3">
                                        <p>
                                       Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="tab2-4">
                                        <p>
                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.
                                        </p>
                                        <p>
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                        </p>
                                    </div>
                                </div>							
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="section-title">Photo spot</h3>
                        <div class="widget">
                            <div id="photoCarousel" class="carousel carousel-4 slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#photoCarousel" data-slide-to="1" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                    	<img src="images/prv/col-img-2.jpg" alt="" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>First slide label</h3>
                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/prv/col-img-1.jpg" alt="" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>First slide label</h3>
                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#photoCarousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right carousel-control" href="#photoCarousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </section>
    
    <section class="slice bg-3">
	<div class="w-section inverse">
        <div class="container">
        	<h3 class="section-title">Our partners</h3>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-1.png" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-2.png" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-3.png" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-4.png" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-7.png" alt="">
                        </a>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="client">
                    	<a href="#">
                    		<img src="images/clients/client-6.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            	<div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>5th Avenue, New York - United States</li>
                        <li>Phone: +10 724 1234 567 | Fax: +10 724 1234 567 </li>
                        <li>Email: <a href="mailto:hello@example.com" title="Email Us">hello@example.com</a></li>
                        <li>Skype: <a href="skype:my.business?call" title="Skype us">my-business</a></li>
                        <li>Creating great templates is our passion</li>
                    </ul>
                 </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col">
                    <h4>Mailing list</h4>
                    <p>Sign up if you would like to receive occasional treats from us.</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your email address...">
                            <span class="input-group-btn">
                                <button class="btn btn-two" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-3">
            	<div class="col col-social-icons">
                    <h4>Follow us</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                </div>
            </div>

             <div class="col-md-3">
             	<div class="col">
                    <h4>About us</h4>
                    <p>
                    Boomerang Bootstrap Template is made with love and passion for your own business.
                    <br><br>
                    <a href="#" class="btn btn-two">Try it now!</a>
                    </p>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="row">
        	<div class="col-lg-9 copyright">
            	2013 © Web Pixels. All rights reserverd. 
                <a href="#">Terms of use</a> | 
                <a href="#">Privacy policy</a>
            </div>
            <div class="col-lg-3 footer-logo">
            	
            </div>
        </div>
    </div>
</footer></div>

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Plugins -->
<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="js/masonry.js"></script>
<script type="text/javascript" src="js/jquery.ui.totop.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.init.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script type="text/javascript" src="js/jquery.wp.custom.js"></script>
<script type="text/javascript" src="js/jquery.wp.switcher.js"></script>
<script type="text/javascript" src="js/greensock.js" ></script>
 
<!-- LayerSlider script files -->
<script src="js/layerslider.transitions.js" type="text/javascript"></script>
<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<!-- Initializing the slider -->
	<script>
//		jQuery("#layerslider").layerSlider({
//			pauseOnHover: true,
//			autoPlayVideos: false,
//			skinsPath: 'assets/layerslider/skins/',
//			responsive: false,
//			responsiveUnder: 1280,
//			layersContainer: 1280,
//			skin: 'borderlessdark3d',
//			hoverPrevNext: true,
//		});
	</script>
</body>
</html>