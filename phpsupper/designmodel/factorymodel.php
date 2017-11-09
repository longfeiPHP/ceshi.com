<?php
/**
 * 加法类
 */
class OperationAdd
{
    public function getValue($num1, $num2)
    {
        return $num1+$num2;
    }
}
/**
 * 减法类
 */
class OperationSub
{
    public function getValue($num1, $num2)
    {
        return $num1-$num2;
    }
}
/**
 * 乘法类
 */
class OperationMul
{
    public function getValue($num1, $num2)
    {
        return $num1*$num2;
    }
}
/**
 * 除法类
 */
class OperationDiv
{
    public function getValue($num1, $num2)
    {
        try{
            if($num2==0){
                throw new Exception('除数不能为0');
            }
            return $num1/$num2;
        }catch (Exception $e){
            echo '您的输入有误:'.$e->getMessage();
        }
    }
}
/**
 * 工厂类
 */
class Factory
{
    /**
     * @param $operate
     * @return OperationAdd|OperationDiv|OperationMul|OperationSub
     */
    public static function createObj($operate)
    {
        switch ($operate){
            case '+':
                return new OperationAdd();
                break;
            case '-':
                return new OperationSub();
                break;
            case '*':
                return new OperationMul();
                break;
            case '/':
                return new OperationDiv();
                break;
        }
    }
}
$test = Factory::createObj('+');
echo $test->getValue(1,1);
