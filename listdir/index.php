<?php
function list_dir($dir){
	$content = scandir($dir);
	foreach ($content as $item){
		if(is_dir("$dir/$item") && substr($item,0,1) != "."){
			list_dir("$dir/$item");	
		}else{
			
		}
	}
}
list_dir("../");
?>