<?php
/*
 *                        .::::.
 *                      .::::::::.
 *                     :::::::::::
 *                  ..:::::::::::'
 *               '::::::::::::'
 *                 .::::::::::
 *            '::::::::::::::..
 *                 ..::::::::::::.
 *               ``::::::::::::::::
 *                ::::``:::::::::'        .:::.
 *               ::::'   ':::::'       .::::::::.
 *             .::::'      ::::     .:::::::'::::.
 *            .:::'       :::::  .:::::::::' ':::::.
 *           .::'        :::::.:::::::::'      ':::::.
 *          .::'         ::::::::::::::'         ``::::.
 *      ...:::           ::::::::::::'              ``::.
 *     ````':.          ':::::::::'                  ::::..
 *                        '.:::::'                    ':'````..
 *
 * @Author       : Sweeper <wili.lixiang@gmail.com>
 * @Date         : 2023-10-07 22:38:42
 * @LastEditors  : Sweeper <wili.lixiang@gmail.com>
 * @LastEditTime : 2023-10-07 22:38:54
 * @FilePath     : \sweeper\design-pattern\src\Example\Creational\AbstractFactory\DigitalProduct.php
 * @Description  : 抽象工厂模式
 * @AuthorEmail  : wili.lixiang@gmail.com
 * Copyright (c) 2023 by Sweeper email: wili.lixiang@gmail.com, All Rights Reserved.
 */

namespace Sweeper\DesignPattern\Example\Creational\AbstractFactory;

class DigitalProduct implements Product
{
    /** @var int */
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }
}
