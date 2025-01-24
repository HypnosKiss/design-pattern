<?php
/**
 * Created by Administrator PhpStorm.
 * Author: Sweeper <wili.lixiang@gmail.com>
 * Time: 2025/1/24 17:14
 * @Interface \Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface
 */

namespace Sweeper\DesignPattern\Contracts\StrategyPattern;

/**
 * 策略接口
 * Created by Administrator PhpStorm.
 * Author: Sweeper <wili.lixiang@gmail.com>
 * Time: 2025/1/24 17:16
 * @Interface \Sweeper\DesignPattern\Contracts\StrategyPattern\StrategyInterface
 */
interface StrategyInterface
{

    /**
     * 执行策略
     * Author: Sweeper <wili.lixiang@gmail.com>
     * Time: 2025/1/24 17:19
     * @param $data
     * @return mixed
     */
    public function execute($data);

}