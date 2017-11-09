<?php
/** 
* A test class
*
* @param  foo bar
* @return baz
*/
class Person{
	private $_allowDynamicAttributes = false;
	protected $id = 0;
	protected $name;
	protected $biography;
	const ONE = 'number one';
	const TWO = 'number two';
	
	public function __construct(){
		return 'this is construct function';	
	}
	//一些普通方法
	public function getId(){
		return $this->id;
			
	}
	public function setId($v){
		return $this->id = $v;
	}
	public function getName(){
		return $this->name;	
	}
	public function setName($v){
		return $this->name = $v;
	}
	public function getBiography(){
		return $this->biography;	
	}
	public function setBiography($v){
		return $this->biography = $v;	
	}	
}

$class = new ReflectionClass('Person');//建立反射
echo '<pre>';

//导出类
$class->export($class);
//获取类中某个常量的值
//echo $class->getConstant('ONE');   // print "number one"
//获取类中所有常量,数组形式
//print_r($class->getConstants());
//获取类中的构造函数 如果类中不存在构造函数则返回 NULL
//var_dump($class->getConstructor());
//获取类中的熟悉
//var_dump($class->getDefaultProperties());
//获取类的注释(注释格式必须按要求去写)
//var_dump($class->getDocComment());
//获取类的最后一行的行数
//echo $class->getEndLine();

//其他方法详见  http://php.net/manual/zh/book.reflection.php

echo '</pre>';
?>