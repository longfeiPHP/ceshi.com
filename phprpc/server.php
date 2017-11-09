<?php
require_once 'jsonRPCServer.php';
// member 为测试类
require 'member.php';
// 服务端调用
$myExample = new member();
// 注入实例
jsonRPCServer::handle($myExample) or print 'no request';
?>