<?php
/*
 *                   ___====-_  _-====___
 *             _--^^^#####//      \\#####^^^--_
 *          _-^##########// (    ) \\##########^-_
 *         -############//  |\^^/|  \\############-
 *       _/############//   (@::@)   \############\_
 *      /#############((     \\//     ))#############\
 *     -###############\\    (oo)    //###############-
 *    -#################\\  / VV \  //#################-
 *   -###################\\/      \//###################-
 *  _#/|##########/\######(   /\   )######/\##########|\#_
 *  |/ |#/\#/\#/\/  \#/\##\  |  |  /##/\#/  \/\#/\#/\#| \|
 *  `  |/  V  V  `   V  \#\| |  | |/#/  V   '  V  V  \|  '
 *     `   `  `      `   / | |  | | \   '      '  '   '
 *                      (  | |  | |  )
 *                     __\ | |  | | /__
 *                    (vvv(VVV)(VVV)vvv)
 *
 *      ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *                神兽保佑            永无BUG
 *
 * @Author       : Sweeper <wili.lixiang@gmail.com>
 * @Date         : 2023-10-07 22:42:45
 * @LastEditors  : Sweeper <wili.lixiang@gmail.com>
 * @LastEditTime : 2023-10-07 23:04:47
 * @FilePath     : \sweeper\design-pattern\test\AbstractFactoryTest.php
 * @Description  : 抽象工厂 - 单元测试
 * @AuthorEmail  : wili.lixiang@gmail.com
 * Copyright (c) 2023 by Sweeper email: wili.lixiang@gmail.com, All Rights Reserved.
 */

use PHPUnit\Framework\TestCase;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\CsvWriter;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\JsonWriter;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\DigitalProduct;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\ProductFactory;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\ShippableProduct;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\WinWriterFactory;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\UnixWriterFactory;
use Sweeper\DesignPattern\Example\Creational\AbstractFactory\WriterFactory;

require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Summary of AbstractFactoryTest
 * @test .\vendor\bin\phpunit src\Example\Creational\AbstractFactory\Tests\AbstractFactoryTest.php
 */
final class AbstractFactoryTest extends TestCase
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertInstanceOf(DigitalProduct::class, $product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertEquals(150, $product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertEquals(200, $product->calculatePrice());
    }

    public function testCanCreateCsvWriterOnWin()
    {
        $writerFactory = new WinWriterFactory();
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }

    public function testCanCreateCsvWriterOnUnix()
    {
        $writerFactory = new UnixWriterFactory();
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }

    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }
    /**
     * @dataProvider provideFactory
     */
    public function testCreateCsvWriterOnWin(WriterFactory $writerFactory)
    {
        var_dump('testCreateCsvWriterOnWin:' . get_class($writerFactory));
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        var_dump('testCreateCsvWriterOnUnix:' . get_class($writerFactory));
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
