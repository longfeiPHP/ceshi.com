<?php 
class Base{
	public static function autoload($class){
		include $class.'.php';
	}
}
if(function_exists('spl_autoload_register')) {
	spl_autoload_register(array('Base', 'autoload'));
} else {
	function __autoload($class) {
		return Base::autoload($class);
	}
}
