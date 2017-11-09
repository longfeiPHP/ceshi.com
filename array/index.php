<?php
function p($v,$k=false){
	echo "<pre>";print_r($v);echo"</pre>";
	$k && exit();
}
/**
 * php 数组处理函数
 * 更多更详细的介绍   http://www.shouce.ren/api/view/a/3635
 */
$arr1 = array('AAA'=>'aaa','B'=>'bbb','c'=>'ccc');
$arr2 = array(
	array(
		'id'=>1,
		'first_name'=>'Li',
		'last_name'=>'Hailong',
	),
	array(
		'id'=>2,
		'first_name'=>'Wang',
		'last_name'=>'Yang',
	),
	array(
		'id'=>3,
		'first_name'=>'Zhao',
		'last_name'=>'Quan',
	),
);
$arr3 = array('c'=>'a','x'=>'b','d'=>'c');
$arr4 = array('a'=>'apple','b'=>'book','c'=>'ccc');
$arr5 = array(5=>'five','2'=>'two','one'=>'one');
$arr6 = array('a','b','c','a','b');
$arr7 = array('a','b','c'=>'c');
$arr8 = array('a','b');

/**
 * php4.2+
 * 把数组的键统一转换为大写(CASE_UPPER)或小写(CASE_LOWER),如果$param1不是数组则$return false   
 * $param1 array
 * $param2 CASE_UPPER or CASE_LOWER(default)
 * $return new array
 */
//$result = array_change_key_case($arr1,CASE_UPPER);

/**
 * php4.2+
 * 把一个数组分割成新的数组块   
 * $param1 array
 * $param2 num    每个数组块元素的个数
 * $param3 bool   true:保留原数组中的键值/false(default):键值重排成索引数组
 */
//$result = array_chunk($arr1,2,true);

/**
 * php5.5+
 * 返回数组中某个列的值 
 * $param1 array   多维数组(记录集)
 * $param2 num or field   可以是索引数组的键字段，也可以是关联数组的字段
 * $param3 field or null  return array 的键,为空时返回的数组是索引数组
 * $return new array 
 */
//$result = array_column($arr1,'last_name','id');

/**
 * php5+
 * 数组合并：第一个数组的值为键,第二个数组的值为值 组成一个新数组,并且两个数组的元素个数必须一致,如果两个数组元素个数不一致那么在php5.4-会报错,在php5.4+ return false
 * $param1 array
 * $param2 array
 * $return new array 
 */
//$result = array_combine($arr3,$arr4);

/**
 * php4+
 * 数组合并:把多个数组合并成一个数组,无关数组元素的个数,如果键值相同,则后面的值会覆盖前面的值,如果只有一个$param,那么会把该$param中的元素中的数字键重排,从0开始,但是关联键不变
 * $param1,$param2...   array 要合并的数组
 * $return new array
 */
//$result = array_merge($arr1,$arr3,$arr4); 

/**
 * php4.0.1+
 * 数组合并:把多个数组合并成一个数组,与array_merge的区别是遇到相同的键的时候后面的value不会覆盖前面的value,而是将多个相同键名的值递归组成一个数组,如果只有一个$param,则和array_merge相同
 * $param1,$param2...   array 要合并的数组
 * $return new array
 */
//$result = array_merge_recursive($arr1,$arr3,$arr4);

/**
 * php4+
 * 统计数组中所有值出现的次数
 * $param array 数组参数
 * $return new array 
 */
//$result = array_count_values($arr6);

/**
 * php4.0.1+
 * 根据数组的"值"求差集,用第一个减第二个数组,$result只能是第一个数组中的元素,如果多个数组比较,则用第一个数组减去第二个数组,得到新数组,然后再减去第三个数组...
 * 总之$result的值必须是第一个元素中的值
 * $param1 array
 * $param2 array
 * $param...
 * $return new array
 */
//$result = array_diff($arr7,$arr8);

/**
 * php4.3+
 * 根据数组的键和值求差集,用第一个减第二个数组,$result只能是第一个数组中的元素,如果多个数组比较,则用第一个数组减去第二个数组,得到新数组,然后再减去第三个数组...
 * 总之$result的值必须是第一个元素中的值
 * $param1 array
 * $param2 array
 * $param...
 * $return new array
 */
//$result = array_diff_assoc($arr7,$arr8);

/**
 * php5.1+
 * 根据数组的"键"求差集,用第一个减第二个数组,$result只能是第一个数组中的元素,如果多个数组比较,则用第一个数组减去第二个数组,得到新数组,然后再减去第三个数组...
 * 总之$result的值必须是第一个元素中的值
 * $param1 array
 * $param2 array
 * $param...
 * $return new array
 */
//$result = array_diff_key($arr7,$arr8);

/**
 * php4+
 * 数组的键值互换
 * $param array
 * $return array
 */
//$result = array_flip($arr8);

/**
 * php4.0.7+
 * 判断数组中的某个键是否存在
 * $param1 key
 * $param2 array
 * $return boolean true or false
 */
//$result = array_key_exists('b',$arr4);

/**
 * php4+
 * 以索引数组的形式返回数组的所有键值
 * $param array
 * $return new array 索引数组
 */
$result = array_keys($arr1);

//显示输出
p($result);
?>