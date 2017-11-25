<?php 
header("content-type:text/html;charset=utf-8");

//设置模式
define('APP_DEBUG',true);   //开发调试模式
//define('APP_DEBUG',false);   //生产模式

//给系统静态资源文件请求路径设置常量
//Home前台
define('BOWER_COMPONENTS_URL','/kehu/Home/Public/bower_components/');
define('CSS_URL','/kehu/Home/Public/css/');
define('FONTS_URL','/kehu/Home/Public/fonts/');
define('IMG_URL','/kehu/Home/Public/img/');
define('JS_URL','/kehu/Home/Public/js/');
define('PHP_URL','/kehu/Home/Public/version/');

//引入tp框架的接口文件
include("../ThinkPHP/ThinkPHP.php");

 ?>