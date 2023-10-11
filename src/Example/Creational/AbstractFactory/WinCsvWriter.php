<?php
/*
 *
 *    ┏┓　　　┏┓
 *  ┏┛┻━━━┛┻┓
 *  ┃　　　　　　　┃
 *  ┃　　　━　　　┃
 *  ┃　＞　　　＜　┃
 *  ┃　　　　　　　┃
 *  ┃...　⌒　...　┃
 *  ┃　　　　　　　┃
 *  ┗━┓　　　┏━┛
 *      ┃　　　┃　
 *      ┃　　　┃
 *      ┃　　　┃
 *      ┃　　　┃  神兽保佑
 *      ┃　　　┃  代码无bug　　
 *      ┃　　　┃
 *      ┃　　　┗━━━┓
 *      ┃　　　　　　　┣┓
 *      ┃　　　　　　　┏┛
 *      ┗┓┓┏━┳┓┏┛
 *        ┃┫┫　┃┫┫
 *        ┗┻┛　┗┻┛
 *
 * @Author       : Sweeper <wili.lixiang@gmail.com>
 * @Date         : 2023-10-07 23:20:37
 * @LastEditors  : Sweeper <wili.lixiang@gmail.com>
 * @LastEditTime : 2023-10-07 23:20:45
 * @FilePath     : \sweeper\design-pattern\src\Example\Creational\AbstractFactory\WinCsvWriter.php
 * @Description  :
 * @AuthorEmail  : wili.lixiang@gmail.com
 * Copyright (c) 2023 by Sweeper email: wili.lixiang@gmail.com, All Rights Reserved.
 */

namespace Sweeper\DesignPattern\Example\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}
