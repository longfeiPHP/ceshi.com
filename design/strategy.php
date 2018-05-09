
<?php
/**
 * 策略模式
 */
interface FlyBehavior{
	public function fly();
}
class FlyWithWings implements FlyBehavior{
	public function fly(){
		echo "fly with wings <br />";
	}
}
class FlyWithNo implements FlyBehavior{
	public function fly(){
		 echo "Fly With No Wings <br />";
	}
}

class Duck{
	private $_flyBehavior;
	public function performFly(){
		$this->_flyBehavior->fly();
	}
	
	public function setFlyBehavior(FlyBehavior $behavior){
		$this->_flyBehavior = $behavior;
	}
}
class RubberDuck extends Duck{
	
}
$duck = new RubberDuck();

$duck->setFlyBehavior(new FlyWithWings);
$duck->performFly();

$duck->setFlyBehavior(new FlyWithNo);
$duck->performFly();
?>