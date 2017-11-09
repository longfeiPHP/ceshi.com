<?php
class demo{
    public $name;
    public static $count=0;
    private function __construct(){
        self::$count++;
    }
/*    public function __destruct(){
        echo "destory ".$this->name."<br/>";
        self::$count--;
    }*/
    public static function create(){
    	new self();
		echo self::$count;
    }
}