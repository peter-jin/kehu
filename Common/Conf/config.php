<?php
return array(
	//'配置项'=>'配置值'



	//页面底部设置显示跟踪信息
	'SHOW_PAGE_TRACE' => TRUE,

	//设置请求的默认分组
	'DEFAULT_MODULE' => 'Home', //默认模块
	'MODULE_ALLOW_LIST' => array('Home','Admin'),//设置一个对比的分组列表


	//修改默认模板后缀
	'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀


	 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'kehu',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'kh_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8


);