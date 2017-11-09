<?php
header('Content-type: application/json');
if($_FILES["image"]["error"]!=0){
	$result = array('status'=>0,'msg'=>'1001');//上传错误
	echo json_encode($result);exit();
}
if( !in_array($_FILES["image"]["type"], array('image/gif','image/jpeg','image/bmp','image/png')) ){
	$result = array('status'=>0,'msg'=>'1002');//图片格式错误
	echo json_encode($result);exit();
}

if($_FILES["image"]["size"] > 2000000){//判断是否大于2M
	$result = array('status'=>0,'msg'=>'1003');//图片大小超过限制
	echo json_encode($result);exit();
}

$filename = substr(md5(time()),0,10).mt_rand(1,10000);
$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

$localName = "D:/workspace/xlyy/jqueryfileupload/imgs/".$filename.'.'.$ext;

if ( move_uploaded_file($_FILES["image"]["tmp_name"], $localName) == true) {
	$lurl = 'http://192.168.1.230/jqueryfileupload/imgs/'.$filename.'.'.$ext;
	$result  = array('status'=>1,'msg'=>$lurl);
}else{
	$result  = array('status'=>0,'msg'=>'error');
}
echo json_encode($result);