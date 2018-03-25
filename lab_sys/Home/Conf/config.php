<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '172.18.92.48', // 服务器地址
    'DB_NAME'               =>  'lab_sys',          // 数据库名
    'DB_USER'               =>  'w',      // 用户名
    'DB_PWD'                =>  'w',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    TMPL_PARSE_STRING => array('__PUBLIC__' => __ROOT__.'/Public/lab_sys'),
);