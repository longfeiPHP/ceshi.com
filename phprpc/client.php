<?php
require_once 'jsonRPCClient.php';
$url = 'http://localhost/rpc/server.php';
$myExample = new jsonRPCClient($url);

// 客户端调用
try {
 $name = $myExample->getName();
    echo $name ;
} catch (Exception $e) {
 echo nl2br($e->getMessage()).'<br />'."\n";
}
?>