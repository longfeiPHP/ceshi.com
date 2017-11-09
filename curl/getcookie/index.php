<?php
$url = "http://127.0.0.1:8080/ceshi.com/curl/getcookie/test.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');  
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt'); 
$content = curl_exec($ch);
var_dump($content);
curl_close($ch);
?>