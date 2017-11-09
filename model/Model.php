<?php
class Model{
	public $mysqli = null;
	public function __construct(){
		$this->mysqli =  new MySQLi(C('dbhost'),C('dbuser'),C('dbpass'),C('dbname'));
	}
}