<?php
$arr = array(3,5,8,4,9,6,1,7,2);
/**
 * 冒泡排序
 */
function BubbleSort($arr){
	$length = count($arr);
	if($length <= 1){
		return $arr;
	}
	for($i = 0; $i<$length; $i++){
		for($j = $length - 1; $j < $i; $j--){
			if($arr[$j]<$arr[$j-1]){
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $tmp;
			}
		}
	}
	return $arr;
}

$sort = BubbleSort($arr);
echo '<pre>';
print_r($sort);
echo '</pre>';

