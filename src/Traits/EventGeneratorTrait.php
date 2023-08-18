<?php

namespace Sweeper\DesignPattern\Traits;

use Sweeper\DesignPattern\Contracts\ObserverPattern\ObserverInterface;

/**
 * 事件生产者
 * Created by PhpStorm.
 * User: sweeper
 * Time: 2022/9/15 20:04
 * @Path \Sweeper\DesignPattern\Observer\EventGeneratorTrait
 */
trait EventGeneratorTrait
{

    /**
     * 观察者列表
     * @var \SplObjectStorage
     */
    private $observers;

    /**
     * 在观察事件发生后通知给观察者的数据
     * @var array
     */
    private $observeEventData = [];

    /**
     * 设置在观察事件发生后通知给观察者的数据
     * User: sweeper
     * Time: 2022/8/29 10:15
     * @param $name
     * @param $value
     * @return $this
     */
    public function setObserverData($name, $value): self
    {
        $this->observeEventData[$name] = $value;

        return $this;
    }

    /**
     * 设置在观察事件发生后通知给观察者的数据
     * User: sweeper
     * Time: 2022/8/29 10:16
     * @param array $dataList
     * @return $this
     */
    public function setObserverDataList(array $dataList): self
    {
        $this->observeEventData = array_merge($this->observeEventData, $dataList);

        return $this;
    }

    /**
     * 初始化观察者
     * User: sweeper
     * Time: 2022/8/29 10:18
     * @return $this
     */
    private function initObservers(): self
    {
        if ($this->observers === null) {
            $this->observers = new \SplObjectStorage();
        }

        return $this;
    }

    /**
     * 添加(连接)观察者
     * User: sweeper
     * Time: 2022/8/29 10:18
     * @param ObserverInterface $observer
     * @return $this
     */
    public function attach(ObserverInterface $observer): self
    {
        $this->initObservers();
        $this->observers->attach($observer);

        return $this;
    }

    /**
     * 移除(分离)观察者
     * User: sweeper
     * Time: 2022/8/29 10:18
     * @param ObserverInterface $observer
     * @return $this
     */
    public function detach(ObserverInterface $observer): self
    {
        $this->initObservers();
        $this->observers->detach($observer);

        return $this;
    }

    /**
     * 移除(分离)所有观察者
     * User: sweeper
     * Time: 2022/8/29 10:18
     * @return $this
     */
    public function detachAll(): self
    {
        $this->observers = new \SplObjectStorage();

        return $this;
    }

    /**
     * 通则所有观察者【观察的事件发生了】
     * User: sweeper
     * Time: 2022/8/29 10:19
     * @param array $data
     * @return void
     */
    public function notify(array $data = []): void
    {
        $this->initObservers();
        foreach ($this->observers as $observer) {
            /** @var ObserverInterface $observer */
            $observer->triggerEvent($this, array_merge($this->observeEventData, $data));
        }
    }

}
