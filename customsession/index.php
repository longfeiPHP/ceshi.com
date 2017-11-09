<?php
$sdbc = null;

//开启session
function open_session(){
	global $sdbc;
	$sdbc = mysqli_connect("localhost","root","","test");
	return true;
}

//关闭session
function close_session(){
	global $sdbc;
	return mysqli_close($sdbc);
}

//读取session
function read_session($sid){
	global $sdbc;
	$q = sprintf('select data from sessions where id="%s"',mysqli_real_escape_string($sdbc,$sid));
	$r = mysqli_query($sdbc,$q);
	if(mysqli_num_rows($r)==1){
		list($data) = mysqli_fetch_array($r,MYSQLI_NUM);
	}else{
		return '';	
	}
}

//写入session
function write_session($sid,$data){
	global $sdbc;
	$q = sprintf('REPLACE INTO sessions(id,data) values ("%s","%s")',$sid,$data);
	$r = mysqli_query($sdbc,$q);
	return true;
}

//删除session
function destroy_session($sid){
	global $sdbc;
	$q = sprintf('DELETE FROM sessions WHERE id="%s"',mysqli_real_escape_string($sdbc,$sid));
	$r = mysqli_query($sdbc,$q);
	$_SESSION = array();
	return true;	
}

//清楚session
function clean_session($expire){
	global $sdbc;
	$q = sprintf('DELETE FROM sessions WHERE DATE_ADD(last_accesed,INTERVAL %d SECOND) < now()',(int) $expire);
	$r = mysqli_query($sdbc,$q);
	return true;
}
session_set_save_handler('open_session','close_session','read_session','write_session','destroy_session','clean_session');
session_start();
?>