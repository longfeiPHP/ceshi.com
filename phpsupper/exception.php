<?php
/**
 * 自定义异常类
 */
class MyException extends Exception{
	public function __construct($message,$code=0){
		parent::__construct($message,$code);	
	}
}
function checkNum($number){
	if($number>1){
		throw new MyException('number is must be 1 or below',1);	
	}
	return true;
}
try{
	checkNum(2);
}catch(MyException $e){
	echo $e->getLine();	
}