<!doctype html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="1"> -->
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
</body>
</html>
<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'http://127.0.0.1:8080/ceshi.com/curl/viruses/form.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POSTFIELDS,'fields');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($ch);
curl_close($ch);
?>