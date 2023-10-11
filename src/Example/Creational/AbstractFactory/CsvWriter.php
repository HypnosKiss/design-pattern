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
 * @Date         : 2023-10-07 23:14:39
 * @LastEditors  : Sweeper <wili.lixiang@gmail.com>
 * @LastEditTime : 2023-10-07 23:14:51
 * @FilePath     : \sweeper\design-pattern\src\Example\Creational\AbstractFactory\CsvWriter.php
 * @Description  :
 * @AuthorEmail  : wili.lixiang@gmail.com
 * Copyright (c) 2023 by Sweeper email: wili.lixiang@gmail.com, All Rights Reserved.
 */

namespace Sweeper\DesignPattern\Example\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}
