<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * 创建员工信息抽象类
 */
abstract class staff
{
    abstract function create();//创建员工信息
}
/**
 * 创建部门信息抽象类
 */
abstract class department extends staff
{
    abstract function combine(staff $item);
    abstract function chaifen(staff $item);
}
/**
 * 创建员工信息实体类
 */
class createStaff extends staff
{
    private $name;
    private $age;
    private $sex;
    private $staff = array();

    public function __construct($name,$age,$sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    /**
     * 创建员工信息
     */
    public function create()
    {
        $this->staff[$this->name] = array(
            'name'=>$this->name,
            'age'=>$this->age,
            'sex'=>$this->sex,
        );
        return $this->staff;
    }
}
/**
 * 创建部门关系
 */
class createDepartment extends department
{
    private $departmentname;//部门名称
    private $items = array();//用于存放人员信息
    private $depart_arr = array();//用于存放部门信息
    public function __construct($departmentname)
    {
        $this->departmentname = $departmentname;
    }

    public function create()
    {
        foreach($this->items as $item){
            $arr = $item->create();
            $this->depart_arr[$this->departmentname][] = $arr;
        }
        if(empty($this->depart_arr)){
            $this->depart_arr[$this->departmentname] = array();
        }
        return $this->depart_arr;
    }

    /**
     * 把传进来的信息放进items数组
     */
    public function combine(staff $item)
    {
        $this->items[] = $item;
    }

    /**
     * 把传进来的信息删除
     */
    public function chaifen(staff $item)
    {
        $key = array_search($item,$this->items);
        if($key!==false){
            unset($this->items[$key]);
        }
    }
}
$emploee1 = new createStaff('LHL','27','男');
$emploee2 = new createStaff('XNN','26','男');
$dep1 = new createDepartment('技术部');
$dep1->combine($emploee1);
$dep1->combine($emploee2);

$emploee3 = new createStaff('MJ','22','男');
$emploee4 = new createStaff('FJJ','22','女');
$dep2 = new createDepartment('编辑部');
$dep2->combine($emploee3);
$dep2->combine($emploee4);

$dep = new createDepartment('杏林誉苑');
$dep->combine($dep1);
$dep->combine($dep2);


echo '<pre>';
print_r($dep->create());
echo '</pre>';