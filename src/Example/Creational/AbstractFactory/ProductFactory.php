<?php
/*
 *           佛曰:
 *                   写字楼里写字间，写字间里程序员；
 *                   程序人员写程序，又拿程序换酒钱。
 *                   酒醒只在网上坐，酒醉还来网下眠；
 *                   酒醉酒醒日复日，网上网下年复年。
 *                   但愿老死电脑间，不愿鞠躬老板前；
 *                   奔驰宝马贵者趣，公交自行程序员。
 *                   别人笑我忒疯癫，我笑自己命太贱；
 *                   不见满街漂亮妹，哪个归得程序员？
 *
 * @Author       : Sweeper <wili.lixiang@gmail.com>
 * @Date         : 2023-10-07 22:40:20
 * @LastEditors  : Sweeper <wili.lixiang@gmail.com>
 * @LastEditTime : 2023-10-07 22:40:28
 * @FilePath     : \sweeper\design-pattern\src\Example\Creational\AbstractFactory\ProductFactory.php
 * @Description  : 抽象工厂模式 - 产品工厂
 * @AuthorEmail  : wili.lixiang@gmail.com
 * Copyright (c) 2023 by Sweeper email: wili.lixiang@gmail.com, All Rights Reserved.
 */

namespace Sweeper\DesignPattern\Example\Creational\AbstractFactory;

class ProductFactory
{
    public const SHIPPING_COSTS = 50;

    public function createShippableProduct(int $price): Product
    {
        return new ShippableProduct($price, static::SHIPPING_COSTS);
    }

    public function createDigitalProduct(int $price): Product
    {
        return new DigitalProduct($price);
    }
}
