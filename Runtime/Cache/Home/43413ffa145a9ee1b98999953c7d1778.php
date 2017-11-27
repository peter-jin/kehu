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
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo IMG_URL; ?>favicon.ico">

</head>

<body>

<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>索云数据客户管理系统</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
                <script type="text/javascript">
                window.onload= function(){
                    var fm = document.getElementsByTagName('form')[0];
                    fm.onsubmit = function(evt){
                        //① 收集全部的表单域信息
                        var nm = document.getElementById('myname').value;
                        var pw = document.getElementById('mypass').value;
                       
                        //var info = "name="+nm+"&pwd="+pw;
                        //② 利用ajax无刷新方式提交表单信息到服务器
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function(){
                            if(xhr.readyState==4){
                                alert(xhr.responseText);
                            }
                        }
                        //xhr.open('post','/kehu/index.php/Home/Index/login');
                        //xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
                        //xhr.send(info);
                        var inp = $(this); 
                        $.ajax({
                            url:'/kehu/index.php/Home/Index/login',
                            data:{name:nm,pass:pw},
                            type:'post',
                            success:function(data){
                                if(data == 1){
                                    //可用
                                    console.log(data);
                                    inp.prev().html('登陆成功');
                                    CUSER = true;
                                    window.location.href = '/kehu/index.php/Home/Dashboard/';

                                }else{  
                                    console.log(data);
                                    inp.prev().html('用户名或密码不正确');
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
            
            <div class="alert alert-info">登录请输入用户名和密码.</div>
            <form class="form-horizontal" id="myform" action="index.html" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" id="myname" placeholder="Username" value="">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" id="mypass" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

                   <!--  <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> 记住我</label>
                    </div>
                    <div class="clearfix"></div>
 -->
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">登录</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

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