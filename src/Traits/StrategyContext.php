<?php
/**
 * Created by Administrator PhpStorm.
 * Author: Sweeper <wili.lixiang@gmail.com>
 * Time: 2025/1/24 17:23
 * @Trait \Sweeper\DesignPattern\Traits\StrategyContext
 */

namespace Sweeper\DesignPattern\Traits;

use Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface;

/**
 * 策略模式上下文
 * Created by Administrator PhpStorm.
 * Author: Sweeper <wili.lixiang@gmail.com>
 * Time: 2025/1/24 17:23
 * @Trait \Sweeper\DesignPattern\Traits\StrategyContext
 */
trait StrategyContext
{

    /** @var \Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface 策略执行者 */
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return \Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface
     */
    public function getStrategy(): StrategyInterface
    {
        return $this->strategy;
    }

    /**
     * 设置策略执行者
     * Author: Sweeper <wili.lixiang@gmail.com>
     * Time: 2025/1/24 17:19
     * @param \Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface $strategy
     * @return $this
     */
    public function setStrategy(StrategyInterface $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * 执行策略
     * Author: Sweeper <wili.lixiang@gmail.com>
     * Time: 2025/1/24 17:20
     * @param $data
     * @return mixed
     */
    public function executeStrategy($data)
    {
        return $this->strategy->execute($data);
    }

}