<?php

use Sweeper\DesignPattern\Contracts\ObserverPattern\ObserverInterface;
use Sweeper\DesignPattern\Contracts\ObserverPattern\ObserverSubject;
use Sweeper\DesignPattern\ObserverPattern\EventGenerator;
use Sweeper\DesignPattern\Traits\EventGeneratorTrait;

require dirname(__DIR__) . '/vendor/autoload.php';

class Observer extends \PHPUnit\Framework\TestCase implements ObserverInterface
{

    public function triggerEvent(ObserverSubject $subject, array $data = [])
    {
        var_dump('triggerEvent ===== ', $subject, $data);
    }

}

/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/19 15:21
 */
class EventGeneratorTest implements ObserverSubject
{

    use EventGeneratorTrait;

    public function testEventGenerator()
    {
        $eventGenerator = new EventGenerator();
        $eventGenerator->attach(new Observer());
        $eventGenerator->notify(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
    }

    public function testEventGeneratorTrait()
    {
        $this->attach(new Observer());
        $this->notify(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
    }

}

$eventGenerator = new EventGeneratorTest();
var_dump('===== testEventGenerator =====');
$eventGenerator->testEventGenerator();
var_dump('===== testEventGeneratorTrait =====');
$eventGenerator->testEventGeneratorTrait();