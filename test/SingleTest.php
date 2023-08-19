<?php

use Sweeper\DesignPattern\SinglePattern\SinglePattern;

require '../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/19 15:39
 */
class SingleTest extends SinglePattern
{

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

class SingleTraitsTest
{

    use \Sweeper\DesignPattern\Traits\SinglePattern;

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}
var_dump('===== SingleTest::instance =====');
$obj = SingleTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();

var_dump('===== SingleTraitsTest::instance =====');

$obj = SingleTraitsTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();