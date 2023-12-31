<?php
/**
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/1/31 15:47
 */

namespace Sweeper\DesignPattern\Traits;

/**
 * 单例模式
 * Created by PhpStorm.
 * User: Sweeper
 * Time: 2023/8/18 22:49
 * @Path \Sweeper\DesignPattern\Traits\SinglePattern
 */
trait SinglePattern
{

    /** @var array 配置信息 */
    private $config = [];

    /** @var self 实例 */
    private static $instance;

    /**
     * 初始化操作
     * @param array $config
     */
    private function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     * User: Sweeper
     * Time: 2023/8/27 23:17
     * @return void
     */
    private function __clone()
    {
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }

    /**
     * 防止反序列化（这将创建它的副本）
     * User: Sweeper
     * Time: 2023/8/27 23:17
     * @return void
     */
    private function __wakeup()
    {
        trigger_error('Wakeup is not allow!', E_USER_ERROR);
    }

    /**
     * 实例化对象
     * User: Sweeper
     * Time: 2023/8/18 22:54
     * @param array $config
     * @return static
     */
    public static function instance(array $config = []): self
    {
        return static::getInstance($config);
    }

    /**
     * 定义获取对象实例的入口，返回该实例
     * User: Sweeper
     * Time: 2023/1/9 11:01
     * @param array $config
     * @return static
     */
    public static function getInstance(array $config = []): self
    {
        if (null === self::$instance) {
            self::$instance = new static($config);
        }

        return self::$instance;
    }

    /**
     * 获取配置信息
     * User: Sweeper
     * Time: 2023/8/18 23:08
     * @param string|null $key
     * @return array|mixed|string
     */
    public function getConfig(string $key = null)
    {
        return $key ? ($this->config[$key] ?? '') : $this->config;
    }

    /**
     * 设置配置信息
     * User: Sweeper
     * Time: 2023/1/9 11:02
     * @param array $config
     * @return static
     */
    public function setConfig(array $config): self
    {
        $this->config = $config;

        return $this;
    }

}
