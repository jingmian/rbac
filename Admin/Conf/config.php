<?php
return array(
'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => 'localhost', // 服务器地址
'DB_NAME'   => 'shop', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => 'root', // 密码
'DB_PORT'   => "", // 端口
'DB_PREFIX' => 'sw_', // 数据库表前缀 
'DB_CHARSET'=> 'utf8', // 字符集
'SHOW_PAGE_TRACE' =>true, 
'SESSION_AUTO_START' =>true,
'TMPL_PARSE_STRING' =>array(
             '__PUBLIC__' => '/Public/Admin'),
	//'配置项'=>'配置值'
);