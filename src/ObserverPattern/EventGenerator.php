<?php

namespace Sweeper\DesignPattern\ObserverPattern;

use Sweeper\DesignPattern\Contracts\ObserverPattern\ObserverSubject;
use Sweeper\DesignPattern\Traits\EventGeneratorTrait;

/**
 * 事件生成器
 * Created by PhpStorm.
 * User: sweeper
 * Time: 2022/9/15 20:03
 * @Path \Sweeper\DesignPattern\Observer\EventGenerator
 * @example
 * $eventGenerator = new EventGenerator();
 * $eventGenerator->attach(new xxx());
 * $eventGenerator->notify([]);
 */
class EventGenerator implements ObserverSubject
{

    use EventGeneratorTrait;

    public function __construct()
    {
        $this->initObservers();
    }

}