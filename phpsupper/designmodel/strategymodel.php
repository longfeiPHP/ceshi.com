<?php
/**
 * php设计模式之策略模式
 */
interface Strategy
{
    public function computePrice($price);
}

/**
 * 普通会员
 */
class CommonMember implements Strategy
{
    public function computePrice($price)
    {
        return $price;
    }
}

/**
 * 中级会员
 */
class MiddleMember implements Strategy
{
    public function computePrice($price)
    {
        return $price*0.8;
    }
}
/**
 * 高级会员
 */
class SupperMember implements Strategy
{
    public function computePrice($price)
    {
        return $price*0.7;
    }
}
/**
 *
 */
class Price
{
    private $strategyInstance;

    public function __construct($instance)
    {
        $this->strategyInstance = $instance;
    }

    public function compute($price)
    {
        return $this->strategyInstance->computePrice($price);
    }
}

$p = new Price(new SupperMember());
echo $price = $p->compute(100);