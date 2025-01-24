<?php
/**
 * Created by Administrator PhpStorm.
 * Author: Sweeper <wili.lixiang@gmail.com>
 * Time: 2025/1/24 17:26
 * File: StrategyContextTest.php
 */

namespace Sweeper\DesignPattern\Test\StrategyPattern;

use PHPUnit\Framework\TestCase;
use Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface;
use Sweeper\DesignPattern\StrategyPattern\Context;

class ConcreteStrategyA implements StrategyInterface
{

    public function execute($data): void
    {
        // 实现具体的算法A
        echo 'Executing algorithm A with data: ' . $data . "\n";
    }

}

class ConcreteStrategyB implements StrategyInterface
{

    public function execute($data): void
    {
        // 实现具体的算法B
        echo 'Executing algorithm B with data: ' . $data . "\n";
    }

}

class StrategyContextTest extends TestCase
{

    public function testConcreteStrategy(): void
    {
        // 创建具体的策略对象
        $strategyA = new ConcreteStrategyA();
        $strategyB = new ConcreteStrategyB();

        // 创建上下文对象，并设置策略
        $context = new Context($strategyA);
        $context->executeStrategy('Test data for A');

        // 修改策略并再次执行
        $context->setStrategy($strategyB)->executeStrategy('Test data for B');

        $this->assertInstanceOf(Context::class, $context);
    }

}
