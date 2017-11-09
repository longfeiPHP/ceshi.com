<?php
/**
 * php设计模式之单例模式
 * user LHL
 * 2016.07.06
 */
class Danli
{
    private static $_instance;
    private $dbConn;
    private function __construct()
    {
        $this->dbConn = new MySQLi('localhost','root','','test');
        $this->dbConn->query('set names utf8');
    }
    private function __clone()
    {
    }
    public static function getInstance()
    {
        if(!self::$_instance instanceof self)
        {
            echo '123';
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    public function query($sql)
    {
        $result = $this->dbConn->query($sql);
        $result_arr = array();
        while($query = $result->fetch_assoc()){
            $result_arr[]    = $query;
        }
        return $result_arr;//结果集以数组的形式返回
    }
}
$danli = Danli::getInstance();
//不管执行几个query方法都会只有一个数据库连接
$r = $danli->query('show tables');
$re = $danli->query('select * from article');
echo '<pre>';
print_r($r);
print_r($re);
echo '</pre>';