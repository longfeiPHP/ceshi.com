<?php
header('Content-Type:text/html;Charset=utf-8');  
$arr = array(
	'username'=>$_GET['loginuser']
);
$echo = $_GET['jsoncallback'] . "(".json_encode($arr).")"; 
echo $echo; 
exit;