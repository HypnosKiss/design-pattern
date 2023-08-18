<?php

namespace Sweeper\DesignPattern\Contracts\ObserverPattern;

/**
 * 观察者接口
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/18 23:13
 * @Path \Sweeper\DesignPattern\Contracts\Observer\ObserverInterface
 */
interface ObserverInterface
{

    /**
     * 触发事件
     * User: sweeper
     * Time: 2022/9/15 19:47
     * @param ObserverSubject $subject 这里为实现了 ObserverSubject 接口的对象
     * @param array           $data    传递给观察者的数据
     * @return mixed
     */
    public function triggerEvent(ObserverSubject $subject, array $data = []);

}
