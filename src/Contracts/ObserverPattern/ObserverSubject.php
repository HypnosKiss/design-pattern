<?php

namespace Sweeper\DesignPattern\Contracts\ObserverPattern;

/**
 * 观察者主题
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/18 23:15
 * @Path \Sweeper\DesignPattern\Contracts\Observer\ObserverSubject
 */
interface ObserverSubject
{

    /**
     * 添加(连接)观察者
     * User: sweeper
     * Time: 2022/8/29 10:06
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function attach(ObserverInterface $observer);

    /**
     * 移除(分离)观察者
     * User: sweeper
     * Time: 2022/8/29 10:05
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function detach(ObserverInterface $observer);

    /**
     * 通则所有观察者
     * User: sweeper
     * Time: 2022/8/29 10:04
     * @return mixed
     */
    public function notify(array $data = []);

}