<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
    <title>客户管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo CSS_URL; ?>bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo CSS_URL; ?>charisma-app.css" rel="stylesheet">
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo BOWER_COMPONENTS_URL; ?>bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>uploadify.css' rel='stylesheet'>
    <link href='<?php echo CSS_URL; ?>animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo BOWER_COMPONENTS_URL; ?>jquery/jquery.min.js"></script>
    <script src="<?php echo BOWER_COMPONENTS_URL; ?>jquery/jquery-1.8.3.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo IMG_URL; ?>favicon.ico">

</head>
<body>
	
    
 <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo IMG_URL; ?>logo20.png" class="hidden-xs"/>
                <span>客户管理系统</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">用户名</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">描述</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">退出</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs">主题样式</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
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
                        <li class="nav-header">导航菜单</li>
                        <!-- <li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span>首页</span></a> -->
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-heart"></i><span>用户管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/kehu/index.php/Home/User">用户列表</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon  glyphicon-user"></i><span> 客户管理</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/kehu/index.php/Home/Customer">客户列表</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-calendar"></i><span> 客户拜访日程</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/kehu/index.php/Home">日程列表</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i><span> 客户拜访纪要</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/kehu/index.php/Home">纪要列表</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label> -->
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

	
    
     

<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">首页</a>
        </li>
            
        <li>
            <a href="#">添加用户</a>
        </li>
    </ul>
</div>


<div class="row">
    <!-- 用户基础信息 -->
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 基础信息</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-round btn-default"><i class="glyphicon glyphicon-share-alt"></i></a>
                </div>
            </div>
            <div class="box-content">
               <script type="text/javascript">
                    window.onload= function(){
                        var fm = document.getElementById('myform');
                        fm.onsubmit = function(evt){
                            //① 收集全部的表单域信息
                            //客户信息前面加C
                            var uname = document.getElementById('uname').value; //客户姓名
                            var pword = document.getElementById('upass').value; //客户年龄
                            var sex = document.getElementById('usex').value; //客户学校
                            var telephone = document.getElementById('uphone').value; //客户学历
                            var email = document.getElementById('uemail').value; //客户单位
                            var uright = document.getElementById('uselect').value; //客户住址
                            var summary = document.getElementById('wenben').value; //客户手机
                            var add_people = document.getElementById('add_people').value; //客户手机


                            //制作时间
                            var timestamp = Date.parse(new Date());
                            var date = new Date(timestamp);
                            Y = date.getFullYear() + '-';
                            M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                            D = date.getDate() + ' ';
                            h = date.getHours() + ':';
                            m = date.getMinutes() + ':';
                            s = date.getSeconds(); 
                            var utime = Y+M+D+h+m+s; //呀麻碟
                           
                      
                            
                

                            //var info = "name="+nm+"&pwd="+pw;
                            //② 利用ajax无刷新方式提交表单信息到服务器
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange = function(){
                                if(xhr.readyState==4){
                                    alert(xhr.responseText);
                                }
                            } 
                            //xhr.open('post','/kehu/index.php/Home/User/login');
                            //xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                            //xhr.send(info);
                            var inp = $(this);

                            $.ajax({
                                url:'/kehu/index.php/Home/User/useraction',
                                data:{uname:uname,pword:pword,telephone:telephone,email:email,uright:uright,summary:summary,add_people:add_people,utime:utime},
                                type:'POST',
                                success:function(data){
                                    if(data == 1){
                                        //可用
                                        console.log(data);
                                        inp.prev().html('添加成功');
                                        CUSER = true;
                                    }else{  
                                        console.log(data);
                                        inp.prev().html('添加失败');
                                        CUSER = false;
                                    }
                                },
                                error:function(){
                                    alert('错误');
                                },
                                timeout:10000,
                                //同步
                                async:false
                                
                            })
                            
                            evt.preventDefault();//通过事件对象阻止浏览器默认动作
                            //return false;//阻止浏览器form表单的提交动作
                        }
                    }
                </script>
                
                <div class="alert alert-info">详细填写用户信息</div>
                <form role="form" id="myform">
                    <div class="form-group">
                        <label for="username">用户名</label>
                        <input type="text" class="form-control" id="uname" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="Password">密码</label>
                        <input type="password" class="form-control" id="upass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="sex">性别</label><br />
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="usex" value="1"> 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="usex" value="0"> 女
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="phone">手机</label>
                        <input type="tel" class="form-control" id="uphone" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱</label>
                        <input type="email" class="form-control" id="uemail" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="select">用户权限</label>

                        <div class="controls">
                            <select id="uselect" data-rel="chosen">
                                <option>用户</option>
                                <option>测试用户</option>
                                <option>管理员</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="wenben">概述</label>
                        <textarea class="form-control" id="wenben" rows="3" placeholder="Summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="add_people">用户名</label>
                        <input type="text" class="form-control" id="add_people" placeholder="add_people">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                    <button type="reset" class="btn btn-default">清除</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

    <!-- 用户详细信息 -->
    <!-- 
    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> 详细信息</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form">
                    <div class="form-group">
                        <label for="username">毕业院校</label>
                        <input type="text" class="form-control" id="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="Password">学历</label>
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="sex">性别</label><br />
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="sex" value="1"> 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="sex" value="0"> 女
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="phone">手机</label>
                        <input type="tel" class="form-control" id="phone" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="select">用户权限</label>

                        <div class="controls">
                            <select id="select" data-rel="chosen">
                                <option>用户</option>
                                <option>测试用户</option>
                                <option>管理员</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="wenben">概述</label>
                        <textarea class="form-control" id="wenben" rows="3" placeholder="Summary"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">提交</button>
                </form>

            </div>
        </div>
    </div> -->
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
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo BOWER_COMPONENTS_URL; ?>bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo JS_URL; ?>jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo BOWER_COMPONENTS_URL; ?>moment/min/moment.min.js'></script>
<script src='<?php echo BOWER_COMPONENTS_URL; ?>fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo JS_URL; ?>jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo BOWER_COMPONENTS_URL; ?>chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo BOWER_COMPONENTS_URL; ?>colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo JS_URL; ?>jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo BOWER_COMPONENTS_URL; ?>responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo BOWER_COMPONENTS_URL; ?>bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo JS_URL; ?>jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo JS_URL; ?>jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo JS_URL; ?>jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo JS_URL; ?>jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo JS_URL; ?>jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo JS_URL; ?>charisma.js"></script>


</body>
</html>