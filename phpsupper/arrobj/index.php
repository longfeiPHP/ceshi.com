<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php数组和对象的根本</title>
<script type="text/javascript" src="../jquery-1.9.1.js"></script>
</head>

<body>
<?php
	$person_arr = array('name'=>'Tom','gender'=>'male');
	$person_str = serialize($person_arr);
	echo $person_str.'<br />';
	
	class Person{
		public $name = 'Tom';
		public $gender = 'male';
		public function say(){
			echo $this->name.' is '.$this->gender;	
		}
	}
	$student = new Person();
	echo $student_arr = serialize($student).'<br />';
	
	class Family{
		public $person;
		public $loc;
		public function __construct($p,$loc){
			$this->person = $p;
			$this->loc = $loc;
		}	
	}
	$family = new Family($student,'beijing');
	echo serialize($family).'<br />';
	
	class Contry{
		public $contryName;
		public $param;
		public function __construct($family,$contryName){
			$this->contryName = $contryName;
			$this->param = $family;
		}
	}
	$contry = new Contry($family,'china');
	echo serialize($contry);
?>
</body>
</html>