<?php
header("Content-type:text/html;charset=utf-8");
if(false){
	header("Content-type:text/html;charset=utf-8");
	require('config/config.ini.php');//加载配置文件
	//路由设置
	$act = !empty($_GET['act'])?$_GET['act']:'index';//control
	$op = !empty($_GET['op'])?$_GET['op']:'index';//method in control
	$class = $act.'Control';//获取类名
	
	//自动加载类
	function __autoload($cla){
		if(substr($cla,-7)=="Control"){//control
			$cla = str_replace("Control",'',$cla);
			require 'control/'.$cla.'.php';
		}else{//model
			require 'model/'.$cla.'.php';
		}
	}
	require('lib/func.php');//公用方法
	
	$control = new $class();
	$control->$op();
}

if(false){
	$mysqli = new MySQLi('localhost','root','','test');
	$sql = 'show columns from test';
	$result = $mysqli->query($sql);
	while($row = $result->fetch_assoc()){
		$array[$row['Field']] = array(
				'name'=>$row['Field'],
				'type'=>$row['Type'],
				'null' 	=>$row['Null'],
				'default'=>$row['Default'],
				'primary'=>(strtolower($row['Key']) == 'pri'),
				'autoinc'=>(strtolower($row['Extra']) == 'auto_increment')
		);
	}	
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

if(false){
	//质数计算
	function getPrimeNum($num){
		$allNum = '2,3,5,7,';
		for($i=10;$i<=$num;$i++){
			if($i % 2 === 0 || $i % 3 === 0 || $i % 5 === 0 || $i % 7 === 0){
				continue;
			}else{
				$allNum .= $i.',';
			}
		}
		return $allNum;
	}
	echo getPrimeNum(1000);
	
	//邮箱正则表达式
	$email_address = '506695621@qq.com';
	$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	if ( preg_match( $pattern, $email_address ) ){
		echo 'sucessfully';
	}
}

if(isset($_GET['cookid'])){
    setcookie("cookid",1000,time()+3600);
}


?>







