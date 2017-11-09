<?php
class userControl{
	public function user(){
		//echo 'user';
		$test_model = Model('test');
		$list = $test_model->dataList();
		include('view/user_list.php');//此处用模板引擎处理
		//p($list);
	}
	public function sentRandNum(){
		$randNum = rand(1000,9999);
		file_put_contents('num.txt',$randNum);
		echo $randNum;
	}
	
	public function sentSns(){
		$pageNum = $_POST['num'];
		$filenum = file_get_contents('num.txt');
		//echo $filenum;exit;
		if(intval($pageNum)==intval($filenum)){
			echo '调用短信接口';
		}else{
			echo '不调用短信接口';	
		}
	}
}