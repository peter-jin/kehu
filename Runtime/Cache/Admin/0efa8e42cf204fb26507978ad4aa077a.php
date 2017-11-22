<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>我的超市</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo ADMIN_CSS_URL; ?>bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo ADMIN_CSS_URL; ?>charisma-app.css" rel="stylesheet">
    <link href='<?php echo ADMIN_BOWER_URL; ?>fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_BOWER_URL; ?>fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo ADMIN_BOWER_URL; ?>chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_BOWER_URL; ?>colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_BOWER_URL; ?>responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_BOWER_URL; ?>bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>uploadify.css' rel='stylesheet'>
    <link href='<?php echo ADMIN_CSS_URL; ?>animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo ADMIN_BOWER_URL; ?>jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo ADMIN_IMG_URL; ?>favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo ADMIN_IMG_URL; ?>logo20.png" class="hidden-xs"/>
                <span>我的超市</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">管理员</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">简况</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">退出</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs">更改主题/皮肤</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> 经典的 </a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> 天蓝色的</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> 电子人</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> 单纯的</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> 黑暗</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> 流明</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> 板岩</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> 空间实验室</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> 联合的</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> 访问网站 </a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> 下拉 <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">行动</a></li>
                        <li><a href="#">另一个动作</a></li>
                        <li><a href="#">其他的东西在这里</a></li>
                        <li class="divider"></li>
                        <li><a href="#">分离环节</a></li>
                        <li class="divider"></li>
                        <li><a href="#">再分离一环</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="搜索" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">主要</li>
                        <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> 仪表板</span></a>
                        </li>
                        <li><a class="ajax-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                        </li>
                        <li><a class="ajax-link" href="form.html"><i
                                    class="glyphicon glyphicon-edit"></i><span> Forms</span></a></li>
                        <li><a class="ajax-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="ajax-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="ajax-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="table.html"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span>商品中心</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="ajax-link" href="grid.html"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="ajax-link" href="icon.html"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">首页</a>
            </li>
            <li>
                <a href="#">商品展示</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><a href="/chaoshi/index.php/Admin/Goods/addgoods"><i class="glyphicon glyphicon-plus"></i>添加商品</a></h2>

        <div class="box-icon">
            <a href="/chaoshi/index.php/Admin/"> <i class="glyphicon glyphicon-share-alt"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">有关此类表格的帮助请检查 <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>序号</th>
        <th>商品名称</th>
        <th>库存</th>
        <th>价格</th>
        <th>图片</th>
        <th>缩略图</th>
        <th>品牌</th>
        <th>创建时间</th>
        <th>操作</th>
        
    </tr>
    </thead>
    <tbody>    
    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="/chaoshi/index.php/Admin/Goods/updgoods">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>

    <tr>
        <td>1</td>
        <td>苹果</td>
        <td class="center">70</td>
        <td class="center">$50.00</td>
        <td class="center">图片</td>
        <td class="center">缩略图</td>
        <td class="center">品牌</td>
        <td class="center">创建时间</td>
        
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                视图
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                编辑
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                删除
            </a>
        </td>
    </tr>
   
   
   
   
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    
   
   

  
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

  
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>设置</h3>
                </div>
                <div class="modal-body">
                    <p>这里可以设置设置...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">取消</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">保存</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">技术支持: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo ADMIN_BOWER_URL; ?>bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo ADMIN_BOWER_URL; ?>moment/min/moment.min.js'></script>
<script src='<?php echo ADMIN_BOWER_URL; ?>fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo ADMIN_JS_URL; ?>jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo ADMIN_BOWER_URL; ?>chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo ADMIN_BOWER_URL; ?>colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo ADMIN_BOWER_URL; ?>responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo ADMIN_BOWER_URL; ?>bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo ADMIN_JS_URL; ?>jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo ADMIN_JS_URL; ?>charisma.js"></script>


</body>
</html>