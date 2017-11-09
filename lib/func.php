<?php
/**
 * 实例化模型
 **/
function Model($model = null){
	$class_name = $model.'Model';
    return new $class_name();//类名
}
/**
 * 格式化打印数据
 **/
function p($v,$k=false){
	echo "<pre>";print_r($v);echo"</pre>";
	$k && exit();
}
/**
 * 获取配置信息
 **/
function C($key){
	global $config;
	return $config[$key];
}
