<?php
header('Contrnt-type:text/html;charset=utf-8');
//定义目录
define('APP_PATH','./APP/');
//开启调试模式
define('APP_DEBUG',true);
//更改框架目录名称,并载入框架入口文件
require './ThinkPHP/ThinkPHP.php';
?>