<?php

use Sweeper\DesignPattern\MultiPattern\MultiPattern;
use Sweeper\DesignPattern\SinglePattern\SinglePattern;

require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/19 15:39
 */
class MultiPatternTest extends MultiPattern
{

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/19 15:39
 */
class MultiPatternTraitTest
{

    use \Sweeper\DesignPattern\Traits\MultiPattern;

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

class SinglePatternTest extends SinglePattern
{

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

class SinglePatternTraitTest
{

    use \Sweeper\DesignPattern\Traits\SinglePattern;

    public function test()
    {
        var_dump($this, $this->getConfig());
    }

}

var_dump('===== MultiPatternTest::instance =====');
$obj = MultiPatternTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();

var_dump('===== MultiPatternTraitTest::instance =====');

$obj = MultiPatternTraitTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();

var_dump('===== SinglePatternTest::instance =====');
$obj = SinglePatternTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();

var_dump('===== SinglePatternTraitTest::instance =====');

$obj = SinglePatternTraitTest::instance(['func' => __FUNCTION__, 'debug' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)]);
$obj->test();