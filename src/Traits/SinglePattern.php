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

    /** @var array 实例列表 */
    private static $instanceList = [];

    /**
     * 初始化操作
     * @param array $config
     */
    private function __construct(array $config = [])
    {
        $this->config = $config;
    }

    private function __clone()
    {
        trigger_error('Clone is not allow!', E_USER_ERROR);
    }

    /**
     * 实例化对象(从实例化列表取出当前调用类的实例)
     * User: Sweeper
     * Time: 2023/8/18 22:54
     * @param array       $config
     * @param string|null $name
     * @param bool        $dynamic
     * @return static
     */
    public static function instance(array $config = [], string $name = null, bool $dynamic = true): self
    {
        return static::getInstance($config, $name, $dynamic);
    }

    /**
     * 定义获取对象实例的入口，返回该实例
     * User: Sweeper
     * Time: 2023/1/9 11:01
     * @param array       $config
     * @param string|null $alias
     * @param bool        $dynamic 根据配置动态变化
     * @return static
     */
    public static function getInstance(array $config = [], string $alias = null, bool $dynamic = true): self
    {

        $alias = $alias ?? static::class;
        if ($dynamic) {
            $alias .= ':' . md5(json_encode($config));
        }
        // 判断是否已经存在实例化对象
        if (empty(static::$instanceList[$alias])) {
            static::$instanceList[$alias] = new static($config);// 不存在，则实例化一个
        }

        return static::$instanceList[$alias];
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
