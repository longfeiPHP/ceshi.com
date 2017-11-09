<?php
	$rst["result_code"] = "FAIL"; //SUCCESS
	$rst["err_code"] = "SYS_ERROR";
	$rst["err_code_des"] = "不支持此操作";
	$json = json_encode($rst, JSON_UNESCAPED_UNICODE);
	print $json; 
?>