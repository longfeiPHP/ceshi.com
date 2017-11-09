<?php
/**
 * php 钩子技术
 * 理解:php钩子技术就是再不更新核心代码的同时改变核心代码的行为
 **/
/**
 * 核心类,该类为某框架的核心类，在使用过程中不可以修改，但是还要修改该类的行为，则使用钩子技术，例子如下
 **/
class Core{
	public static function coreMethod(){
		Hook::exec('action1');
		echo 'core code<br />';
		Hook::exec('action2');
	}
}
/**
 * 钩子实现类
 **/
class Hook{
	public static function exec($fun,$class=""){
		if($class==""){//没有设置哪个类去修改核心代码的行为,那么默认执行defaultClass
			$m = new defaultClass();
		}else{
			$m = new $class;	
		}
		if($fun=="action1"){
			$m->action1();	
		}elseif($fun=="action2"){
			$m->action2();	
		}
	}
}
/**
 * 外部类修改核心代码行为
 */
class defaultClass{
	public function action1(){
		echo 'this is action1111<br />';	
	}
	public function action2(){
		echo 'this is action2222<br />';	
	}
}
//调用核心代码
Core::coreMethod();
?>