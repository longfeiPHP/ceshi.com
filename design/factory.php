<?php
/**
 * 接口
 */
interface IUser{
	function getName();
}
/**
 * User类继承IUser接口
 */
class User implements IUser{
	public function __construct($id){}
	public function getName(){
		return 'Jack';	
	}
}
/**
 * 工厂类
 */
class UserFactory{
	public static function Create($id){
		return new User($id);	
	}
}

$uo = UserFactory::Create(1);
echo $uo->getName();
?>