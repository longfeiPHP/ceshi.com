
<?php
/**
 * 策略模式
 */

/**
 * 课程接口
 * 
 */
interface Lesson{
	public function goLesson();
}
/**
 * 公共课
 */
class CommonLesson implements Lesson{
	public $price = 20;//价格
	public function goLesson(){
		echo 'go CommonLesson <br />';
	}
}
/**
 * 医学课
 */
class DocLesson implements Lesson{
	public $price = 200;//价格
	public function goLesson(){
		echo 'go DocLesson <br />';
	}
}

class Stuents{
	private $lesson;
	public function getLesson(){
		$this->lesson->goLesson();
	}
	public function setLesson(Lesson $less){
		$this->lesson = $less;
	}
}
class Student extends Stuents{
	
}
$student = new Student();
//公共课
$student->setLesson(new CommonLesson());
$student->getLesson();
//医学课
$student->setLesson(new DocLesson());
$student->getLesson();



?>