<?php
/**
 * php数组就是对象,对象就是数组
 **/
/**数组转对象**/
/*$arr = array('name'=>'Tom');
$obj = (object)$arr;
var_dump($obj);
exit;
$std = new stdClass();
$std_str = serialize($std);
echo $std_str;*/

/**对象转数组**/
class Person{
	public $name = 'Tom';
}
$p = new Person();
$p_arr = (array)$p;
print_r($p_arr);
?>