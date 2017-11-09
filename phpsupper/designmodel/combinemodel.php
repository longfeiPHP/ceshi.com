<?php
header('Content-Type:text/html;charset=utf-8');

/**
 * 创建树叶的抽象类
 */
abstract class tree
{
    abstract function create();
}
/**
 * 创建树枝的抽象类,继承tree
 */
abstract class branch extends tree
{
    abstract function combination(tree $item);
    abstract function separation(tree $item);
}
/**
 * 创建树叶
 */
class createLeaf extends tree
{
    private $name;
    private $size;
    private $color;
    private $leaf = array();

    public function __construct($name,$size,$color)
    {
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
    }
    public function create()
    {
        $this->leaf[$this->name] = array(
            'size'=>$this->size,
            'color'=>$this->color,
        );
        return $this->leaf;
    }
}
/**
 * 创建树干
 */
class createBranch extends branch
{
    private $name;
    private $branch = array();
    private $items = array();

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function create()
    {
        foreach($this->items as $item){
            $arr = $item->create();
            $this->branch[$this->name][] = $arr;
        }
        if(empty($this->branch)){
            $this->branch[$this->name] = array();
        }
        return $this->branch;
    }
    public function combination(tree $item)
    {
        $this->items[] = $item;
    }
    public function separation(tree $item)
    {
        $key = array_search($item,$this->items);
        if($key!==false){
            unset($this->items[$key]);
        }
    }
}

$leaf_1 = new createLeaf('大红树叶','大','红');
$leaf_2 = new createLeaf('大绿树叶','大','绿');
$leaf_3 = new createLeaf('大黄树叶','大','黄');

$leaf_4 = new createLeaf('小红树叶','小','红');
$leaf_5 = new createLeaf('小绿树叶','小','绿');
$leaf_6 = new createLeaf('小黄树叶','小','黄');

$branch_1 = new createBranch('树枝1号');
$branch_1->combination($leaf_1);
$branch_1->combination($leaf_2);
$branch_1->combination($leaf_3);

$branch_2 = new createBranch('树枝2号');
$branch_2->combination($leaf_4);
$branch_2->combination($leaf_5);
$branch_2->combination($leaf_6);

$branch = new createBranch('树干');
$branch->combination($branch_1);
$branch->combination($branch_2);

echo '<pre>';
print_r($branch->create());
echo '</pre>';