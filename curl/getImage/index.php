<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>利用cURL获取网络图片</title>
</head>

<body>
<?php 
/**
 * curl获取网络数据保存到本地
 */
$ch = curl_init('http://www.baidu.com/');
$fp = fopen('baidu.txt','w');
curl_setopt($ch,CURLOPT_FILE,$fp);
curl_setopt($ch,CURLOPT_HEADER,0);
$output = curl_exec($ch);
echo $output;
curl_close($ch);
fclose($fp);
?>
</body>
</html>