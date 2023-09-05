<?php

use Sweeper\DesignPattern\MultiPattern\MultiPattern;

require '../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/19 15:39
 */
class MultiTest extends MultiPattern
{

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

class SingleTraitsTest
{

    use \Sweeper\DesignPattern\Traits\Multiton;

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}
var_dump('===== SingleTest::instance =====');
$obj = MultiTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();

var_dump('===== SingleTraitsTest::instance =====');

$obj = SingleTraitsTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();