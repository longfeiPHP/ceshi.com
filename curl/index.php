<?php
//echo time().'<br />';
//printf("%.0f", microtime(true)*1000);
//exit;
//$str = '[{"name":"LHL","passwd":"123123"}]';
//$str = json_decode($str,true);
//print_r($str);
//exit;
/**
 * Curl版本
 * 使用方法：
 * @param $remote_server URL
 * @param $post_string   data
 */
function request_by_curl($remote_server,$post_string){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$remote_server);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_string);
	$return = curl_exec($ch);
	curl_close($ch);
	return $return;
}
$arr = array("name"=>"LHL","passwd"=>"123321");
$arr_json = json_encode($arr);
$res = request_by_curl("http://127.0.0.1:8080/ceshi.com/curl/receive.php",'data='.$arr_json);

$array = json_decode($res, true);

echo '<pre>';
print_r($array);
echo '</pre>';