<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>我的超市</title>

        <!-- Font Icon -->
        <link href="<?php echo CSS_URL; ?>plugin/font-awesome.min.css" rel="stylesheet" type="text/css">  

        <!-- CSS Global -->
        <link href="<?php echo CSS_URL; ?>plugin/bootstrap.min.css" rel="stylesheet" type="text/css">  
        <link href="<?php echo CSS_URL; ?>plugin/bootstrap-select.min.css" rel="stylesheet" type="text/css">     
        <link href="<?php echo CSS_URL; ?>plugin/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="<?php echo CSS_URL; ?>plugin/animate.css" rel="stylesheet" type="text/css"> 
        <link href="<?php echo CSS_URL; ?>plugin/subscribe-better.css" rel="stylesheet" type="text/css"> 

        <!-- Custom CSS -->
        <link href="<?php echo CSS_URL; ?>style.css" rel="stylesheet" type="text/css">

        <!-- Color CSS --> 

        <!--[if lt IE 9]>
        <script src="<?php echo JS_URL; ?>plugin/html5shiv.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/respond.js"></script>
        <![endif]-->        
    </head>

    <body id="home" class="wide">

         

        <div id="loading">
            <div class="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <!-- WRAPPER -->
        <main class="wrapper home-wrap"> 
            <!-- CONTENT AREA -->

            <!-- Main Header Start -->
            <header class="main-header">                  
                <div class="container-fluid rel-div">
                    <div class="col-lg-4 col-sm-8">
                        <div class="main-logo">
                            <a href="index.html"> <strong>安华 <img src="<?php echo IMG_URL; ?>icons/logo-icon.png" alt="" /> </strong> <span class="light-font">我的超市</span>  </a>
                            <span class="medium-font">my shop</span>
                        </div>
                    </div>

                    <div class="col-lg-6 responsive-menu">  
                        <div class="responsive-toggle fa fa-bars"> </div>
                        <nav class="fix-navbar" id="primary-navigation">            
                            <ul class="primary-navbar">                                                
                                <li><a href="index.html">首页</a></li>
                                <li><a href="about-us.html">关于</a></li>
								<li><a href="shop.html">热销商品</a></li> 
								<li><a href="shop-single.html"> 购物单 </a></li>        
								<li><a href="my-account.html"> 本人账户 </a></li>
								<li><a href="contact.html">联系我们</a></li>
                            </ul>                           
                        </nav>
                    </div>

                    <div class="col-lg-2 col-sm-4 cart-megamenu">
                        <div class="cart-hover">
                            <a href="#"> <img alt="" src="<?php echo IMG_URL; ?>icons/cart-icon.png" /> </a>
                            <span class="cnt crl-bg">2</span> <span class="price">$2.170.00</span>
                            <ul class="pop-up-box cart-popup">
                                <li class="cart-list">
                                    <div class="cart-img"> <img src="<?php echo IMG_URL; ?>extra/cart-sm-1.jpg" alt=""> </div>
                                    <div class="cart-title">
                                        <div class="fsz-16">
                                            <a href="#"> <span class="light-font"> 有机食品 </span>  <strong>almonds</strong></a>
                                            <h6 class="sub-title-1">DRY FRUITS</h6>
                                        </div>
                                        <div class="price"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                                </li>

                                <li class="cart-list">
                                    <div class="cart-img"> <img src="<?php echo IMG_URL; ?>extra/cart-sm-2.jpg" alt=""> </div>
                                    <div class="cart-title">
                                        <div class="fsz-16">
                                            <a href="#"> <span class="light-font"> 有机食品 </span>  <strong>pepper</strong></a>
                                            <h6 class="sub-title-1">VEGETABLES</h6>
                                        </div>
                                        <div class="price"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                                </li>

                                <li class="cart-list">
                                    <div class="cart-img"> <img src="<?php echo IMG_URL; ?>extra/cart-sm-3.jpg" alt=""> </div>
                                    <div class="cart-title">
                                        <div class="fsz-16">
                                            <a href="#"> <span class="light-font"> 有机食品 </span>  <strong>onion</strong></a>
                                            <h6 class="sub-title-1">蔬菜</h6>
                                        </div>
                                        <div class="price"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                                </li>

                                <li class="cart-list sub-total">
                                    <div class="pull-left"> 
                                        <strong>小计</strong>
                                    </div>
                                    <div class="pull-right"> 
                                        <strong class="clr-txt">$150.00</strong>
                                    </div>
                                </li>
                                <li class="cart-list buttons">
                                    <div class="pull-left"> 
                                        <a href="cart.html" class="theme-btn-sm-2">查看购物车</a>
                                    </div>
                                    <div class="pull-right"> 
                                        <a href="checkout.html" class="theme-btn-sm-3"> 结账 </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-submenu">

                            <span class="nav-trigger">
                                <a class="menu-toggle" href="#"> <img src="<?php echo IMG_URL; ?>icons/menu.png" alt="" /> </a>
                            </span>
                            <div class="mega-dropdown-menu">
                                <a class="menu-toggle fa fa-close" href="#">  </a>
                                <div class="slider-mega-menu">
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Fruits</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Banana</a> </li>
                                                <li> <a href="#">Water Melon </a> </li>
                                                <li> <a href="#">Blackberry </a> </li>
                                                <li> <a href="#">Plume</a> </li>
                                                <li> <a href="#">Orange</a> </li>
                                                <li> <a href="#">Lemon</a> </li>
                                                <li> <a href="#">Pineapple</a> </li>
                                                <li> <a href="#">Apple</a> </li>
                                                <li> <a href="#">Kiwi</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Fruits </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-1.png" />
                                        </div>
                                    </div>  
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Vegetables</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Cabbage</a> </li>
                                                <li> <a href="#">Garlic </a> </li>
                                                <li> <a href="#">Onion </a> </li>
                                                <li> <a href="#">Plume</a> </li>
                                                <li> <a href="#">Carrot</a> </li>
                                                <li> <a href="#">Papper</a> </li>
                                                <li> <a href="#">Mushrome</a> </li>
                                                <li> <a href="#">Apple</a> </li>
                                                <li> <a href="#">Kiwi</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Vegetables </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-2.png" />
                                        </div>
                                    </div>  
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Dread Juices</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Banana Juice</a> </li>
                                                <li> <a href="#">Water Melon Juice</a> </li>
                                                <li> <a href="#">Blackberry Juice</a> </li>
                                                <li> <a href="#">Plume Juice</a> </li>
                                                <li> <a href="#">Orange Juice</a> </li>
                                                <li> <a href="#">Lemon Juice</a> </li>
                                                <li> <a href="#">Pineapple Juice</a> </li>
                                                <li> <a href="#">Apple Juice</a> </li>
                                                <li> <a href="#">Kiwi Juice</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Dread juices </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-3.png" />
                                        </div>
                                    </div>  
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Juices</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Banana Juice</a> </li>
                                                <li> <a href="#">Water Melon Juice</a> </li>
                                                <li> <a href="#">Blackberry Juice</a> </li>
                                                <li> <a href="#">Plume Juice</a> </li>
                                                <li> <a href="#">Orange Juice</a> </li>
                                                <li> <a href="#">Lemon Juice</a> </li>
                                                <li> <a href="#">Pineapple Juice</a> </li>
                                                <li> <a href="#">Apple Juice</a> </li>
                                                <li> <a href="#">Kiwi Juice</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Fresh Juices </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-1.png" />
                                        </div>
                                    </div>  
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Breads</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Banana</a> </li>
                                                <li> <a href="#">Water Melon </a> </li>
                                                <li> <a href="#">Blackberry </a> </li>
                                                <li> <a href="#">Plume</a> </li>
                                                <li> <a href="#">Orange</a> </li>
                                                <li> <a href="#">Lemon</a> </li>
                                                <li> <a href="#">Pineapple</a> </li>
                                                <li> <a href="#">Apple</a> </li>
                                                <li> <a href="#">Kiwi</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Fresh Bread </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-5.png" />
                                        </div>
                                    </div>  
                                    <div class="menu-block">
                                        <div class="menu-caption">                                                               
                                            <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Tea</strong> </h2>
                                            <ul class="sub-list">
                                                <li> <a href="#">Cabbage</a> </li>
                                                <li> <a href="#">Garlic </a> </li>
                                                <li> <a href="#">Onion </a> </li>
                                                <li> <a href="#">Plume</a> </li>
                                                <li> <a href="#">Carrot</a> </li>
                                                <li> <a href="#">Papper</a> </li>
                                                <li> <a href="#">Mushrome</a> </li>
                                                <li> <a href="#">Apple</a> </li>
                                                <li> <a href="#">Kiwi</a> </li>
                                            </ul>
                                            <h2 class="title"> <a href="#" class="clr-txt"> All Freash Tea </a> </h2>
                                        </div>
                                        <div class="menu-img">
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/menu-6.png" />
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="responsive-toggle fa fa-bars"> </div>
                    </div>

                </div>  
            </header>
            <!-- / Main Header Ends -->   

            <!-- Main Slider Start -->
            <section class="main-slide">
                <img alt=".." src="<?php echo IMG_URL; ?>slider/slide-1.jpg" />
                <div class="tbl-wrp slide-1">
                    <div class="text-middle">
                        <div class="tbl-cell">
                            <div class="slide-caption container text-center">
                                <div class="slide-title">
                                    <img src="<?php echo IMG_URL; ?>icons/slide-txt-1.png" alt="" />
                                    <span>100% Guarantee</span>
                                </div>
                                <div class="slide-title2 pb-50">
                                    <h2 class="section-title"> <span class="light-font">Live </span> <strong>organic </strong> <span class="light-font">for live </span> <strong>healthy </strong> </h2>
                                    <h4 class="sub-title"> ORGANIC FRUITS, VEGETABLES, AND LOT MORE TO YOUR DOOR </h4>
                                </div>
                                <div class="slide">
                                    <a href="#" class="slide-btn"> Shop Now</a>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Main Slider Ends -->   

            <!-- Organic All Starts-->
            <section class="organic-all sec-space-bottom">
                <div class="pattern"> 
                    <img alt="" src="<?php echo IMG_URL; ?>icons/white-pattern.png" />
                </div>
                <div class="section-icon"> 
                    <img alt="" src="<?php echo IMG_URL; ?>icons/icon-1.png" />
                </div>
                <div class="container">                    
                    <div class="organic-wrap"> 
                        <img class="logo-img" alt="" src="<?php echo IMG_URL; ?>logo/logo-1.png" />
                        <div class="tabs-box">
                            <ul class="theme-tabs">
                                <li class=""><a href="#product-tab-1" data-toggle="tab"> <span class="light-font">organic </span> <strong>fruits </strong> </a></li>                                
                                <li class="active"><a href="#product-tab-2" data-toggle="tab"> <span class="light-font">organic </span> <strong>vegetables </strong> </a></li>                               
                                <li class=""><a href="#product-tab-3" data-toggle="tab"> <span class="light-font">organic </span> <strong>juices </strong> </a></li>
                                <li class=""><a href="#product-tab-4" data-toggle="tab"> <span class="light-font">organic </span> <strong>dried fruits </strong> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-fluid"> 
                    <div class="col-md-12"> 
                        <div class="tab-content organic-content row"> 
                            <div id="product-tab-1" class="tab-pane fade active in"> 
                                <div class="product-slider-1 dots-1"> 

                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box active"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="product-tab-2" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 

                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box active"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="product-tab-3" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 

                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box active"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="product-tab-4" class="tab-pane fade"> 
                                <div class="product-slider-1 dots-1"> 

                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box active"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>                                           
                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cabbege</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>salad</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> 
                                        <div class="product-box"> 
                                            <div class="product-media"> 
                                                <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                                <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                                <div class="prod-icons"> 
                                                    <a href="#" class="fa fa-heart"></a>
                                                    <a href="#" class="fa fa-shopping-basket"></a>
                                                    <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                                </div>
                                            </div>

                                            <div class="product-caption"> 
                                                <h3 class="product-title">
                                                    <a href="#"> <span class="light-font"> organic </span>  <strong>pineapple</strong></a>
                                                </h3>
                                                <div class="price"> 
                                                    <strong class="clr-txt">$50.00 </strong>
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
            <!-- / Organic All Ends -->

            <!-- Organic Farmfood Starts-->
            <section class="organic-farm sec-space-top light-bg">

                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-1.png" class="left-bg-img" />  
                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-2.png" class="center-bg-img" />  

                <div class="container rel-div">
                    <div class="title-wrap">
                        <h2 class="section-title"> <span class="light-font">we are </span> <strong>organic farmfood <img src="<?php echo IMG_URL; ?>icons/logo-icon.png" alt="" /> </strong> </h2>
                        <h4 class="sub-title"> <span> ABOUT naturix FARMFOOD </span> </h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="<?php echo IMG_URL; ?>extra/feature-1.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font">fresh from </span> <strong> naturix farm</strong> </h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.  </p>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="<?php echo IMG_URL; ?>extra/feature-2.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font"> 100%</span> <strong> organic goods</strong> </h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.  </p>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="<?php echo IMG_URL; ?>extra/feature-3.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font">premium </span> <strong> quality</strong> </h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.  </p>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="feature-wrap">
                                <img src="<?php echo IMG_URL; ?>extra/feature-4.png" alt="" />
                                <h3 class="title-1 ptb-15"> <span class="light-font">100% </span> <strong>natural</strong> </h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.  </p>
                                <a href="#" class="sm-bnt-wht">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="rel-div feature-img">
                        <img src="<?php echo IMG_URL; ?>extra/feature.png" alt="" />
                    </div>
                </div>
            </section>
            <!-- / Organic Farmfood Ends -->

            <!-- Our Products Starts-->
            <section class="organic-product sec-space">
                <div class="container"> 
                    <div class="row sec-space-top"> 
                        <div class="col-lg-6 col-sm-12"> 
                            <div class="row"> 
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-1.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">organic </span> <strong> fruits</strong> </a> </h3>                                        
                                        <a class="clr-txt font-2" href="#"> <i> 52 items </i> </a>
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-2.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">fresh </span> <strong> vegetables</strong> </a> </h3>
                                        <a class="clr-txt font-2" href="#"> <i> 35 items </i> </a>
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-3.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">organic </span> <strong> breads</strong> </a> </h3>
                                        <a class="clr-txt font-2" href="#"> <i> 23 items </i> </a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12"> 
                            <div class="organic-prod-info">
                                <h4 class="sub-title">  FRESH FROM OUR FARM </h4>
                                <h2 class="section-title ptb-15"> <span class="light-font">220+ </span> <strong>fruits, vegetables </strong> <span class="light-font"> & </span> <strong> lot more</strong> </h2>
                                <p class="fsz-16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row sec-space-top"> 
                        <div class="col-lg-6 col-sm-12"> 
                            <div class="organic-prod-info">
                                <h4 class="sub-title">  FRESH FROM OUR FARM </h4>
                                <h2 class="section-title ptb-15"> <span class="light-font">115+ </span> <strong>organic juices </strong> <span class="light-font"> and </span> <strong> organic tea</strong> </h2>
                                <p class="fsz-16">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12"> 
                            <div class="row"> 
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-4.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">organic </span> <strong> juices</strong> </a> </h3>
                                        <a class="clr-txt font-2" href="#"> <i> 26 items </i> </a>
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-5.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">dried </span> <strong> juices</strong> </a> </h3>
                                        <a class="clr-txt font-2" href="#"> <i> 31 items </i> </a>
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="organic-prod">
                                        <img src="<?php echo IMG_URL; ?>extra/organic-6.png" alt="" />
                                        <span class="divider"></span>
                                        <h3 class="title-1"> <a href="#"> <span class="light-font">organic </span> <strong> tea</strong> </a> </h3>
                                        <a class="clr-txt font-2" href="#"> <i> 17 items </i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <!-- / Our Products Ends -->            

            <!-- naturix Goods Starts-->
            <section class="naturix-goods sec-space-bottom">
                <div class="container"> 
                    <div class="title-wrap">
                        <h4 class="sub-title"> FRESH FROM OUR FARM </h4>
                        <h2 class="section-title"> <span class="round-shape">  <span class="light-font">naturix </span> <strong> organic goods <img src="<?php echo IMG_URL; ?>icons/logo-icon.png" alt="" /></strong> </span> </h2>
                    </div>

                    <div class="tabs-box text-center">
                        <ul class="theme-tabs small">
                            <li class=""><a href="#naturix-tab-1" data-toggle="tab"> <span class="light-font">all </span> <strong>goods </strong> </a></li>                                
                            <li class="active"><a href="#naturix-tab-2" data-toggle="tab"> <span class="light-font">organic </span> <strong>vegetables </strong> </a></li>                               
                            <li class=""><a href="#naturix-tab-3" data-toggle="tab"> <span class="light-font">organic </span> <strong>fruits </strong> </a></li>
                            <li class=""><a href="#naturix-tab-4" data-toggle="tab"> <span class="light-font">organic </span> <strong>tea </strong> </a></li>
                            <li class=""><a href="#naturix-tab-5" data-toggle="tab"> <span class="light-font">all </span> <strong>bread </strong> </a></li>
                            <li class=""><a href="#naturix-tab-6" data-toggle="tab"> <span class="light-font">organic </span> <strong>juices </strong> </a></li>
                        </ul>
                    </div>

                    <div class="tab-content organic-content row"> 
                        <div id="naturix-tab-1" class="tab-pane fade active in"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="naturix-tab-2" class="tab-pane fade"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="naturix-tab-3" class="tab-pane fade"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="naturix-tab-4" class="tab-pane fade"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="naturix-tab-5" class="tab-pane fade"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="naturix-tab-6" class="tab-pane fade"> 
                            <div class="naturix-slider-1 dots-1"> 
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/3.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/5.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/2.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/4.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/7.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/6.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/8.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-box"> 
                                        <div class="product-media"> 
                                            <img class="prod-img" alt="" src="<?php echo IMG_URL; ?>products/1.png" />     
                                            <img class="shape" alt="" src="<?php echo IMG_URL; ?>icons/shap-small.png" />  
                                            <div class="prod-icons"> 
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>                                           
                                        <div class="product-caption"> 
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / naturix Goods Ends -->

            <!-- Deals Starts-->
            <section class="deals sec-space light-bg">
                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-3.png" class="right-bg-img" />  
                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-4.png" class="left-bg-img" />  

                <div class="container"> 
                    <div class="row"> 
                        <div class="col-sm-5 text-right"> 
                            <h4 class="sub-title"> naturix DEAL OF THE DAY </h4>
                            <h2 class="section-title"> <span class="light-font">organic goods </span> <strong>50% </strong> <span class="light-font">off</span> </h2>
                        </div>
                        <div class="col-sm-2 text-center no-padding"> 
                            <img alt="" src="<?php echo IMG_URL; ?>extra/deal.png" />
                        </div>
                        <div class="col-sm-5"> 
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                    <div class="deal-count">
                        <div class="countdown-wrapper">
                            <div id="defaultCountdown" class="countdown"></div>
                        </div>  
                    </div>
                    <div class="deal-slider dots-2">
                        <div class="item">
                            <div class="deal-item">
                                <div class="deal-icons">                                         
                                    <a href="#" class="fa fa-heart"></a>
                                    <a href="#" class="fa fa-shopping-basket"></a>
                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                </div>
                                <div class="deal-content">
                                    <div class="text-right">
                                        <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    </div>
                                    <div class="deal-text">
                                        <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                        <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>rasberry </strong> </a> </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                        <div class="price pt-15"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="deal-img"> <img alt="" src="<?php echo IMG_URL; ?>extra/deal-1.png" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="deal-item">
                                <div class="deal-icons">                                         
                                    <a href="#" class="fa fa-heart"></a>
                                    <a href="#" class="fa fa-shopping-basket"></a>
                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                </div>
                                <div class="deal-content">
                                    <div class="text-right">
                                        <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    </div>
                                    <div class="deal-text">
                                        <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                        <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>pineapple </strong> </a> </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                        <div class="price pt-15"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="deal-img"> <img alt="" src="<?php echo IMG_URL; ?>extra/deal-2.png" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="deal-item">
                                <div class="deal-icons">                                         
                                    <a href="#" class="fa fa-heart"></a>
                                    <a href="#" class="fa fa-shopping-basket"></a>
                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                </div>
                                <div class="deal-content">
                                    <div class="text-right">
                                        <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    </div>
                                    <div class="deal-text">
                                        <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                        <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>rasberry </strong> </a> </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                        <div class="price pt-15"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="deal-img"> <img alt="" src="<?php echo IMG_URL; ?>extra/deal-1.png" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="deal-item">
                                <div class="deal-icons">                                         
                                    <a href="#" class="fa fa-heart"></a>
                                    <a href="#" class="fa fa-shopping-basket"></a>
                                    <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                </div>
                                <div class="deal-content">
                                    <div class="text-right">
                                        <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    </div>
                                    <div class="deal-text">
                                        <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                        <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>pineapple </strong> </a> </h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                        <div class="price pt-15"> 
                                            <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                        </div>
                                    </div>
                                    <div class="deal-img"> <img alt="" src="<?php echo IMG_URL; ?>extra/deal-2.png" /> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Deals Ends -->

            <!-- Random Products Starts-->
            <section class=" sec-space-bottom">
                <div class="pattern"> 
                    <img alt="" src="<?php echo IMG_URL; ?>icons/white-pattern.png">
                </div>
                <div class="section-icon"> 
                    <img alt="" src="<?php echo IMG_URL; ?>icons/icon-1.png">
                    <div class="pt-15 icon"> 
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>  
                        <span class="light-font"> a taste of </span> <strong>real food</strong>
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>  
                    </div>
                </div>
                <div class="container"> 
                    <!-- Random Products -->
                    <div class="row">
                        <div class="col-md-4 pt-50">
                            <h4 class="sub-title-sm"> NEW FROM THE FARM </h4>
                            <h2 class="fsz-30 pb-15"> <span class="light-font">organic </span> <strong>new arrivals </strong> </h2>
                            <div id="new-arrivals" class="nav-1"> 
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-1.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>blackberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-2.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>peach </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-3.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>redberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-4.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>strawberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-5.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>mushroom </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-6.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>apple </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-50">
                            <h4 class="sub-title-sm"> Best Seller </h4>
                            <h2 class="fsz-30 pb-15"> <span class="light-font">organic </span> <strong>popular </strong> </h2>
                            <div id="best-seller" class="nav-1"> 
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-4.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>strawberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-5.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>mushroom </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-6.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>apple </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-7.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>grapes </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-1.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>blackberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-8.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>beans </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-50">
                            <h4 class="sub-title-sm"> Customer Needs </h4>
                            <h2 class="fsz-30 pb-15"> <span class="light-font">organic </span> <strong>random </strong> </h2>
                            <div id="customer-needs" class="nav-1"> 
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-7.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>grapes </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-1.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>blackberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-8.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>beans </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-1.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>blackberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-2.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>peach </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="random-prod"> 
                                        <div class="random-img"> 
                                            <img alt="" src="<?php echo IMG_URL; ?>extra/random-3.png" />
                                        </div>
                                        <div class="random-text"> 
                                            <h3 class="title-1 no-margin"> <a href="#"> <span class="light-font">organic </span> <strong>redberry </strong> </a> </h3>
                                            <span class="divider"></span>
                                            <div class="price"> 
                                                <strong class="clr-txt">$50.00 </strong> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="prod-banner green-banner">
                                <h4 class="title"> <span class="light-font"> FRESH FROM OUR FARM : </span> <strong> GREEN OLIVE </strong> </h4>
                                <div class="banner-box">
                                    <div class="banner-content">
                                        <h3 class="title-sec">Vegetable</h3>
                                        <h2 class="section-title"> <span class="light-font">GREEN </span> <strong>OLIVE </strong> </h2>
                                        <h4 class="sub-title"> 35% OFF IN JUNE-JULY </h4>
                                        <a href="#" class="btn"> <span> shop now </span> <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <img src="<?php echo IMG_URL; ?>extra/banner-1.png" alt=""  class="top-img" />
                                <img src="<?php echo IMG_URL; ?>extra/banner-2.png" alt=""  class="bottom-img" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="prod-banner orange-banner">
                                <h4 class="title"> <span class="light-font"> FRESH SUMMER   </span> <strong>FRUITS </strong> </h4>
                                <div class="banner-box">
                                    <div class="banner-content">
                                        <h3 class="title-sec">Fruits</h3>
                                        <h2 class="section-title"> <span class="light-font">ALL  </span> <strong>SUMMER </strong> </h2>
                                        <h4 class="sub-title"> 35% OFF IN JUNE-JULY </h4>
                                        <a href="#" class="btn"> <span> shop now </span> <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                                <img src="<?php echo IMG_URL; ?>extra/banner-3.png" alt=""  class="bottom-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Random Products Ends -->

            <!-- Subscribe Newsletter Starts-->
            <section class="subscribe-wrap sec-space light-bg">
                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-5.png" class="right-bg-img" />  
                <img alt="" src="<?php echo IMG_URL; ?>extra/sec-img-6.png" class="left-bg-img" />  

                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-4"> 
                            <h4 class="sub-title"> JOIN OUR NEWSLETTER </h4>
                            <h2 class="fsz-35"> <span class="light-font">subscribe </span> <strong> newsletter</strong> </h2>
                        </div>
                        <div class="col-md-8"> 
                            <form class="newsletter-form row">
                                <div class="form-group col-sm-8">
                                    <input class="form-control" placeholder="enter your email address" required=""  type="text">                                                                                     
                                </div>
                                <div class="form-group col-sm-4">                                               
                                    <button class="theme-btn btn-block" type="submit"> subscribe <i class="fa fa-long-arrow-right"></i> </button>                                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Subscribe Newsletter Ends -->

            <!-- Testimonials Starts-->
            <section class="">
                <div class="container"> 
                    <div class="testimonials">     
                        <div id="testimonial-slider" class="testimonial-slider nav-1"> 
                            <div class="item"> 
                                <div class="testi-wrap"> 
                                    <div class="testi-img"> 
                                        <a href="#"> <img src="<?php echo IMG_URL; ?>extra/testi-1.jpg" alt="" /> </a>
                                    </div>
                                    <div class="testi-caption"> 
                                        <p> <i>“Lorem ipsum dolor sit amet, consectetuer adipiscing elitsed the diam nonummy nibh euismod tincidunt.”</i> </p>
                                        <a href="#"> <i class="fa fa-user clr-txt"></i> <strong> LUIS GARCHIA </strong> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item"> 
                                <div class="testi-wrap"> 
                                    <div class="testi-img"> 
                                        <a href="#"> <img src="<?php echo IMG_URL; ?>extra/testi-1.jpg" alt="" /> </a>
                                    </div>
                                    <div class="testi-caption"> 
                                        <p> <i>“Lorem ipsum dolor sit amet, consectetuer adipiscing elitsed the diam nonummy nibh euismod tincidunt.”</i> </p>
                                        <a href="#"> <i class="fa fa-user clr-txt"></i> <strong> LUIS GARCHIA </strong> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Ends -->

            <!-- latest news Starts-->
            <section class="sec-space">
                <div class="container"> 
                    <div class="title-wrap">
                        <h4 class="sub-title"> naturix BLOG </h4>
                        <h2 class="section-title"> <span class="light-font">naturix  </span> <strong>latest news </strong> </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="latest-news">
                                <div class="news-img">
                                    <img src="<?php echo IMG_URL; ?>blog/blog-sm-1.jpg" alt="" />
                                </div>
                                <div class="news-caption">
                                    <h4 class="sub-title-sm"> 26 JUNE 2016 </h4>
                                    <h2 class="title-2"> <a href="#"> <span class="light-font">5 best foods to make you </span> <strong>fresh & healthy</strong> </a> </h2>
                                    <span class="divider-1"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                    <a href="#" class="fsz-12"> READ ARTICLE <i class="fa fa-long-arrow-right"></i> </a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="latest-news">
                                <div class="news-img">
                                    <img src="<?php echo IMG_URL; ?>blog/blog-sm-2.jpg" alt="" />
                                </div>
                                <div class="news-caption">
                                    <h4 class="sub-title-sm"> 26 JUNE 2016 </h4>
                                    <h2 class="title-2"> <a href="#"> <span class="light-font">5 best foods to make you </span> <strong>fresh & healthy</strong> </a> </h2>
                                    <span class="divider-1"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                    <a href="#" class="fsz-12"> READ ARTICLE <i class="fa fa-long-arrow-right"></i> </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- latest news Ends -->

            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="page-footer"> 
                <section class="sec-space light-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 footer-widget">
                                <div class="main-logo">
                                    <a href="index.html"> <strong>naturix <img src="<?php echo IMG_URL; ?>icons/logo-icon.png" alt="" /> </strong> <span class="light-font">farmfood</span>  </a>
                                    <span class="medium-font">ORGANIC STORE</span>
                                </div>
                                <span class="divider-2"></span>
                                <div class="text-widget">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                                    <ul>
                                        <li> <i class="fa fa-map-marker"></i> <span> <strong>100 highland ave,</strong> california, united state </span> </li>
                                        <li> <i class="fa fa-envelope-square"></i> <span><a href="#">contact@naturix.com</a> </span> </li>
                                        <li> <i class="fa fa-phone-square"></i> <span><a href="#">www.naturix.com</a> </span> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 footer-widget">
                                <h2 class="title-1">  <span class="light-font">naturix  </span> <strong>information </strong> </h2>
                                <span class="divider-2"></span>
                                <ul class="list">
                                    <li> <a href="#"> about our shop </a> </li>
                                    <li> <a href="#"> top sellers </a> </li>
                                    <li> <a href="#"> our blog </a> </li>
                                    <li> <a href="#"> new products </a> </li>
                                    <li> <a href="#"> secure shopping </a> </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-4 footer-widget">
                                <h2 class="title-1">  <span class="light-font">my  </span> <strong>account </strong> </h2>
                                <span class="divider-2"></span>
                                <ul class="list">
                                    <li> <a href="my-account.html"> my account </a> </li>
                                    <li><a href="account-information.html"> Account Information </a></li>
                                    <li><a href="address-book.html"> Address Books</a></li>
                                    <li><a href="order-history.html"> Order History</a></li>
                                    <li><a href="review-rating.html"> Reviews and Ratings</a></li>
                                    <li><a href="return.html"> Returns Requests</a></li>
                                    <li><a href="newsletter.html"> Newsletter</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-4 footer-widget">
                                <h2 class="title-1">  <span class="light-font">photo  </span> <strong>instagram </strong> </h2>
                                <span class="divider-2"></span>
                                <ul class="instagram-widget">
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-1.jpg" alt="" /> </a> </li>
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-2.jpg" alt="" /> </a> </li>
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-3.jpg" alt="" /> </a> </li>
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-4.jpg" alt="" /> </a> </li>
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-5.jpg" alt="" /> </a> </li>
                                    <li> <a href="#"> <img src="<?php echo IMG_URL; ?>extra/80x80-6.jpg" alt="" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-bottom">
                    <div class="pattern"> 
                        <img alt="" src="<?php echo IMG_URL; ?>icons/white-pattern.png">
                    </div>
                    <div id="to-top" class="to-top"> <i class="fa fa-arrow-circle-o-up"></i> </div>
                    <div class="container ptb-50">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.naturix.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <ul class="primary-navbar footer-menu">
                                    <li> <a href="#">contact us </a> </li>
                                    <li> <a href="#">term of use  </a> </li>
                                    <li> <a href="#">site map  </a> </li>
                                    <li> <a href="#">privacy policy</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
            <!-- /FOOTER -->
            <div id="to-top-mb" class="to-top mb"> <i class="fa fa-arrow-circle-o-up"></i> </div>
        </main>
        <!-- /WRAPPER -->

        <!-- Product Preview Popup -->
        <section class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg product-modal">
                <div class="modal-content">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close" href="#"> <i class=" fa fa-close"></i> </a>                 

                    <div class="product-single pb-50 clearfix">
                        <!-- Single Products Slider Starts --> 
                        <div class="col-lg-6 col-sm-8 col-sm-offset-2 col-lg-offset-0 pt-50">
                            <div class="prod-slider sync1">
                                <div class="item"> 
                                    <img src="<?php echo IMG_URL; ?>products/prod-single-1.png" alt="">
                                    <a href="<?php echo IMG_URL; ?>products/prod-big-1.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                                <div class="item"> 
                                    <img src="<?php echo IMG_URL; ?>products/prod-single-2.png" alt=""> 
                                    <a href="<?php echo IMG_URL; ?>products/prod-big-2.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                                <div class="item"> 
                                    <img src="<?php echo IMG_URL; ?>products/prod-single-3.png" alt=""> 
                                    <a href="<?php echo IMG_URL; ?>products/prod-big-3.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div> 
                                <div class="item"> 
                                    <img src="<?php echo IMG_URL; ?>products/prod-single-1.png" alt=""> 
                                    <a href="<?php echo IMG_URL; ?>products/prod-big-1.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div> 
                            </div>

                            <div  class="sync2">
                                <div class="item"> <a href="#"> <img src="<?php echo IMG_URL; ?>products/thumb-1.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="<?php echo IMG_URL; ?>products/thumb-2.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="<?php echo IMG_URL; ?>products/thumb-3.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="<?php echo IMG_URL; ?>products/thumb-1.png" alt=""> </a> </div>
                            </div>
                        </div>
                        <!-- Single Products Slider Ends --> 

                        <div class="col-lg-6 pt-50">
                            <div class="product-content block-inline">

                                <div class="tag-rate">
                                    <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="fsz-12"> Based on 25 reviews</span>
                                    </div>
                                </div>

                                <div class="single-caption"> 
                                    <h3 class="section-title">
                                        <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                    </h3>
                                    <span class="divider-2"></span>
                                    <p class="price"> 
                                        <strong class="clr-txt fsz-20">$50.00 </strong> <del class="light-font">$65.00 </del>
                                    </p>

                                    <div class="fsz-16">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adiping elit food sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                    </div>

                                    <div class="prod-btns">
                                        <div class="quantity">
                                            <button class="btn minus"><i class="fa fa-minus-circle"></i></button>
                                            <input title="Qty" placeholder="03" class="form-control qty" type="text">
                                            <button class="btn plus"><i class="fa fa-plus-circle"></i></button>
                                        </div>
                                        <div class="sort-dropdown">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker input-price"  data-width="100%"
                                                        data-toggle="tooltip">
                                                    <option>Kilo</option>
                                                    <option>2 Kilo</option>
                                                    <option>3 Kilo</option>
                                                    <option>4 Kilo</option>
                                                    <option>5 Kilo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="checkbox-inline"><input value="" type="checkbox"> <span>Ready in stock</span></label> </div>
                                    </div>
                                    <ul class="meta">
                                        <li> <strong> SKU </strong> <span>:  AB2922-B</span> </li>
                                        <li> <strong> CATEGORY </strong> <span>:  Fruits</span> </li>
                                        <li class="tags-widget"> <strong> TAGS </strong> <span>:  <a href="#">fruits</a> <a href="#">vegetables</a> <a href="#">juices</a></span> </li>
                                    </ul>
                                    <div class="divider-full-1"></div>
                                    <div class="add-cart pt-15">
                                        <a href="#" class="theme-btn btn"> <strong> ADD TO CART </strong> </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>  

                </div>
            </div>
        </section>
        <!-- / Product Preview Popup -->


        <!-- Subscribe Popup-Dark -->
        <section id="subscribe-popups" class="subscribe-me popups-wrap">                
            <div class="modal-content">   
                <button type="button" class="sb-close-btn close popup-cls"> <i class="fa-times fa clr-txt"></i> </button>
                <div class="subscribe-wrap">                                                                   
                    <div class="main-logo">
                        <a href="index.html"> <strong>naturix <img src="<?php echo IMG_URL; ?>icons/logo-icon.png" alt="" /> </strong> <span class="light-font">farmfood</span>  </a>
                    </div>

                    <div class="title-wrap">
                        <h2 class="section-title"> <strong>Subscribe Newsletter</strong> </h2>
                        <h4 class="fsz-12"> Join our newsletter for free & get latest news weekly </h4>
                    </div>

                    <form class="newsletter-form">
                        <div class="form-group">
                            <input class="form-control" placeholder="enter your email address" required="" type="text">                                                                                     
                        </div>
                        <div class="form-group">                                               
                            <button class="theme-btn upper-text" type="submit"> <strong> subscribe </strong> </button>                                            
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- / Subscribe Popup-Dark -->

        <!-- JS Global -->
        <script src="<?php echo JS_URL; ?>plugin/jquery-2.2.4.min.js"></script>   
        <script src="<?php echo JS_URL; ?>plugin/bootstrap.min.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/bootstrap-select.min.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/owl.carousel.min.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/jquery.plugin.min.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/jquery.countdown.js"></script>
        <script src="<?php echo JS_URL; ?>plugin/jquery.subscribe-better.min.js"></script>

        <!-- Custom JS -->   
        <script src="<?php echo JS_URL; ?>theme.js"></script>


    </body>
</html>