<?php 
header("content-type:text/html;charset=utf-8");

//设置模式
define('APP_DEBUG',true);   //开发调试模式
//define('APP_DEBUG',false);   //生产模式

//给系统静态资源文件请求路径设置常量
//Home前台
define('CSS_URL','/chaoshi/Home/Public/css/');
define('IMG_URL','/chaoshi/Home/Public/img/');
define('JS_URL','/chaoshi/Home/Public/js/');
define('LIb_URL','/chaoshi/Home/Public/lib/');
//Admin后台
define('ADMIN_CSS_URL','/chaoshi/Admin/Public/css/');
define('ADMIN_IMG_URL','/chaoshi/Admin/Public/img/');
define('ADMIN_JS_URL','/chaoshi/Admin/Public/js/');
define('ADMIN_BOWER_URL','/chaoshi/Admin/Public/bower_components/');

//引入tp框架的接口文件
include("../ThinkPHP/ThinkPHP.php");

 ?>