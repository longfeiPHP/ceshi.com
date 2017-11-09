<?php
class testModel extends Model{
	public function dataList(){
		$sql = "select * from article";
		$encode = $this->mysqli->query("set names gb2312");
		$datalist = $this->mysqli->query($sql);
		$listarr = array();
		while($row = $datalist->fetch_assoc()){
			$listarr[] = $row;
		}
		return $listarr;
	}
}