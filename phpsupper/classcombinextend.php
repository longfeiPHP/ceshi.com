<?php
class Car{
	public function addOil(){
		echo "add oil<br />";
	}
}

class Bmw extends Car{
	
}

class Benz{
	public $car;
	public function __construct(){
		$this->car = new Car();
	}
}

$bmw = new Bmw();
$bmw->addOil();

$benz = new Benz();
$benz->car->addOil();
?>