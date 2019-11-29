<?php

namespace think\facade {
    
    /**
     * @see     \think\App
     * @package think\facade
     * @mixin \think\App
     */
    class App
    {
        /**
         * 注册服务
         * @access public
         *
         * @param \think\Service|string $service 服务
         * @param bool                  $force   强制重新注册
         *
         * @return \think\Service|null
         */
        public static function register($service, bool $force = false)
        {
            
            /** @var \think\App $instance */
            return $instance->register($service, $force);
        }
        
        /**
         * 执行服务
         * @access public
         *
         * @param \think\Service $service 服务
         *
         * @return mixed
         */
        public static function bootService($service)
        {
            
            /** @var \think\App $instance */
            return $instance->bootService($service);
        }
        
        /**
         * 获取服务
         *
         * @param string|\think\Service $service
         *
         * @return \think\Service|null
         */
        public static function getService($service)
        {
            
            /** @var \think\App $instance */
            return $instance->getService($service);
        }
        
        /**
         * 开启应用调试模式
         * @access public
         *
         * @param bool $debug 开启应用调试模式
         *
         * @return \think\App
         */
        public static function debug(bool $debug = true)
        {
            
            /** @var \think\App $instance */
            return $instance->debug($debug);
        }
        
        /**
         * 是否为调试模式
         * @access public
         * @return bool
         */
        public static function isDebug(): bool
        {
            
            /** @var \think\App $instance */
            return $instance->isDebug();
        }
        
        /**
         * 设置应用命名空间
         * @access public
         *
         * @param string $namespace 应用命名空间
         *
         * @return \think\App
         */
        public static function setNamespace(string $namespace)
        {
            
            /** @var \think\App $instance */
            return $instance->setNamespace($namespace);
        }
        
        /**
         * 获取应用类库命名空间
         * @access public
         * @return string
         */
        public static function getNamespace(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getNamespace();
        }
        
        /**
         * 获取框架版本
         * @access public
         * @return string
         */
        public static function version(): string
        {
            
            /** @var \think\App $instance */
            return $instance->version();
        }
        
        /**
         * 获取应用根目录
         * @access public
         * @return string
         */
        public static function getRootPath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getRootPath();
        }
        
        /**
         * 获取应用基础目录
         * @access public
         * @return string
         */
        public static function getBasePath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getBasePath();
        }
        
        /**
         * 获取当前应用目录
         * @access public
         * @return string
         */
        public static function getAppPath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getAppPath();
        }
        
        /**
         * 设置应用目录
         *
         * @param string $path 应用目录
         */
        public static function setAppPath(string $path)
        {
            
            /** @var \think\App $instance */
            return $instance->setAppPath($path);
        }
        
        /**
         * 获取应用运行时目录
         * @access public
         * @return string
         */
        public static function getRuntimePath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getRuntimePath();
        }
        
        /**
         * 设置runtime目录
         *
         * @param string $path 定义目录
         */
        public static function setRuntimePath(string $path): void
        {
            
            /** @var \think\App $instance */
            $instance->setRuntimePath($path);
        }
        
        /**
         * 获取核心框架目录
         * @access public
         * @return string
         */
        public static function getThinkPath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getThinkPath();
        }
        
        /**
         * 获取应用配置目录
         * @access public
         * @return string
         */
        public static function getConfigPath(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getConfigPath();
        }
        
        /**
         * 获取配置后缀
         * @access public
         * @return string
         */
        public static function getConfigExt(): string
        {
            
            /** @var \think\App $instance */
            return $instance->getConfigExt();
        }
        
        /**
         * 获取应用开启时间
         * @access public
         * @return float
         */
        public static function getBeginTime(): float
        {
            
            /** @var \think\App $instance */
            return $instance->getBeginTime();
        }
        
        /**
         * 获取应用初始内存占用
         * @access public
         * @return integer
         */
        public static function getBeginMem(): int
        {
            
            /** @var \think\App $instance */
            return $instance->getBeginMem();
        }
        
        /**
         * 初始化应用
         * @access public
         * @return \think\App
         */
        public static function initialize()
        {
            
            /** @var \think\App $instance */
            return $instance->initialize();
        }
        
        /**
         * 是否初始化过
         * @return bool
         */
        public static function initialized()
        {
            
            /** @var \think\App $instance */
            return $instance->initialized();
        }
        
        /**
         * 加载语言包
         *
         * @param string $langset 语言
         *
         * @return void
         */
        public static function loadLangPack($langset)
        {
            
            /** @var \think\App $instance */
            $instance->loadLangPack($langset);
        }
        
        /**
         * 引导应用
         * @access public
         * @return void
         */
        public static function boot(): void
        {
            
            /** @var \think\App $instance */
            $instance->boot();
        }
        
        /**
         * 注册应用事件
         * @access protected
         *
         * @param array $event 事件数据
         *
         * @return void
         */
        public static function loadEvent(array $event): void
        {
            
            /** @var \think\App $instance */
            $instance->loadEvent($event);
        }
        
        /**
         * 解析应用类的类名
         * @access public
         *
         * @param string $layer 层名 controller model ...
         * @param string $name  类名
         *
         * @return string
         */
        public static function parseClass(string $layer, string $name): string
        {
            
            /** @var \think\App $instance */
            return $instance->parseClass($layer, $name);
        }
        
        /**
         * 是否运行在命令行下
         * @return bool
         */
        public static function runningInConsole()
        {
            
            /** @var \think\App $instance */
            return $instance->runningInConsole();
        }
        
    }
    
    /**
     * @see     \think\Cache
     * @package think\facade
     * @mixin \think\Cache
     */
    class Cache
    {
        /**
         * 默认驱动
         * @return string|null
         */
        public static function getDefaultDriver()
        {
            
            /** @var \think\Cache $instance */
            return $instance->getDefaultDriver();
        }
        
        /**
         * 获取缓存配置
         * @access public
         *
         * @param null|string $name    名称
         * @param mixed       $default 默认值
         *
         * @return mixed
         */
        public static function getConfig(string $name = null, $default = null)
        {
            
            /** @var \think\Cache $instance */
            return $instance->getConfig($name, $default);
        }
        
        /**
         * 获取驱动配置
         *
         * @param string $store
         * @param string $name
         * @param null   $default
         *
         * @return array
         */
        public static function getStoreConfig(string $store, string $name = null, $default = null)
        {
            
            /** @var \think\Cache $instance */
            return $instance->getStoreConfig($store, $name, $default);
        }
        
        /**
         * 连接或者切换缓存
         * @access public
         *
         * @param string $name 连接配置名
         *
         * @return \think\cache\Driver
         */
        public static function store(string $name = null)
        {
            
            /** @var \think\Cache $instance */
            return $instance->store($name);
        }
        
        /**
         * 清空缓冲池
         * @access public
         * @return bool
         */
        public static function clear(): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->clear();
        }
        
        /**
         * 读取缓存
         * @access public
         *
         * @param string $key     缓存变量名
         * @param mixed  $default 默认值
         *
         * @return mixed
         */
        public static function get($key, $default = null)
        {
            
            /** @var \think\Cache $instance */
            return $instance->get($key, $default);
        }
        
        /**
         * 写入缓存
         * @access public
         *
         * @param string        $key   缓存变量名
         * @param mixed         $value 存储数据
         * @param int|\DateTime $ttl   有效时间 0为永久
         *
         * @return bool
         */
        public static function set($key, $value, $ttl = null): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->set($key, $value, $ttl);
        }
        
        /**
         * 删除缓存
         * @access public
         *
         * @param string $key 缓存变量名
         *
         * @return bool
         */
        public static function delete($key): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->delete($key);
        }
        
        /**
         * 读取缓存
         * @access public
         *
         * @param iterable $keys    缓存变量名
         * @param mixed    $default 默认值
         *
         * @return iterable
         * @throws  \think\exception\InvalidArgumentException
         */
        public static function getMultiple($keys, $default = null): iterable
        {
            
            /** @var \think\Cache $instance */
            return $instance->getMultiple($keys, $default);
        }
        
        /**
         * 写入缓存
         * @access public
         *
         * @param iterable               $values 缓存数据
         * @param null|int|\DateInterval $ttl    有效时间 0为永久
         *
         * @return bool
         */
        public static function setMultiple($values, $ttl = null): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->setMultiple($values, $ttl);
        }
        
        /**
         * 删除缓存
         * @access public
         *
         * @param iterable $keys 缓存变量名
         *
         * @return bool
         * @throws \think\exception\InvalidArgumentException
         */
        public static function deleteMultiple($keys): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->deleteMultiple($keys);
        }
        
        /**
         * 判断缓存是否存在
         * @access public
         *
         * @param string $key 缓存变量名
         *
         * @return bool
         */
        public static function has($key): bool
        {
            
            /** @var \think\Cache $instance */
            return $instance->has($key);
        }
        
        /**
         * 缓存标签
         * @access public
         *
         * @param string|array $name 标签名
         *
         * @return \think\cache\TagSet
         */
        public static function tag($name): \think\cache\TagSet
        {
            
            /** @var \think\Cache $instance */
            return $instance->tag($name);
        }
        
    }
    
    /**
     * @see     \think\Config
     * @package think\facade
     * @mixin \think\Config
     */
    class Config
    {
        /**
         * 加载配置文件（多种格式）
         * @access public
         *
         * @param  string $file 配置文件名
         * @param  string $name 一级配置名
         *
         * @return array
         */
        public static function load(string $file, string $name = ''): array
        {
            
            /** @var \think\Config $instance */
            return $instance->load($file, $name);
        }
        
        /**
         * 检测配置是否存在
         * @access public
         *
         * @param  string $name 配置参数名（支持多级配置 .号分割）
         *
         * @return bool
         */
        public static function has(string $name): bool
        {
            
            /** @var \think\Config $instance */
            return $instance->has($name);
        }
        
        /**
         * 获取配置参数 为空则获取所有配置
         * @access public
         *
         * @param  string $name    配置参数名（支持多级配置 .号分割）
         * @param  mixed  $default 默认值
         *
         * @return mixed
         */
        public static function get(string $name = null, $default = null)
        {
            
            /** @var \think\Config $instance */
            return $instance->get($name, $default);
        }
        
        /**
         * 设置配置参数 name为数组则为批量设置
         * @access public
         *
         * @param  array  $config 配置参数
         * @param  string $name   配置名
         *
         * @return array
         */
        public static function set(array $config, string $name = null): array
        {
            
            /** @var \think\Config $instance */
            return $instance->set($config, $name);
        }
        
    }
    
    /**
     * @see     \think\Console
     * @package think\facade
     * @mixin \think\Console
     */
    class Console
    {
        /**
         * @access public
         *
         * @param string $command
         * @param array  $parameters
         * @param string $driver
         *
         * @return \think\console\Output|\think\console\output\driver\Buffer
         */
        public static function call(string $command, array $parameters = [], string $driver = 'buffer')
        {
            
            /** @var \think\Console $instance */
            return $instance->call($command, $parameters, $driver);
        }
        
        /**
         * 执行当前的指令
         * @access public
         * @return int
         * @throws \Exception
         * @api
         */
        public static function run()
        {
            
            /** @var \think\Console $instance */
            return $instance->run();
        }
        
        /**
         * 执行指令
         * @access public
         *
         * @param \think\console\Input  $input
         * @param \think\console\Output $output
         *
         * @return int
         */
        public static function doRun(\think\console\Input $input, \think\console\Output $output)
        {
            
            /** @var \think\Console $instance */
            return $instance->doRun($input, $output);
        }
        
        /**
         * 设置输入参数定义
         * @access public
         *
         * @param \think\console\input\Definition $definition
         */
        public static function setDefinition(\think\console\input\Definition $definition): void
        {
            
            /** @var \think\Console $instance */
            $instance->setDefinition($definition);
        }
        
        /**
         * 获取输入参数定义
         * @access public
         * @return \think\console\input\Definition The InputDefinition instance
         */
        public static function getDefinition(): \think\console\input\Definition
        {
            
            /** @var \think\Console $instance */
            return $instance->getDefinition();
        }
        
        /**
         * Gets the help message.
         * @access public
         * @return string A help message.
         */
        public static function getHelp(): string
        {
            
            /** @var \think\Console $instance */
            return $instance->getHelp();
        }
        
        /**
         * 是否捕获异常
         * @access public
         *
         * @param bool $boolean
         *
         * @api
         */
        public static function setCatchExceptions(bool $boolean): void
        {
            
            /** @var \think\Console $instance */
            $instance->setCatchExceptions($boolean);
        }
        
        /**
         * 是否自动退出
         * @access public
         *
         * @param bool $boolean
         *
         * @api
         */
        public static function setAutoExit(bool $boolean): void
        {
            
            /** @var \think\Console $instance */
            $instance->setAutoExit($boolean);
        }
        
        /**
         * 获取完整的版本号
         * @access public
         * @return string
         */
        public static function getLongVersion(): string
        {
            
            /** @var \think\Console $instance */
            return $instance->getLongVersion();
        }
        
        /**
         * 添加指令集
         * @access public
         *
         * @param array $commands
         */
        public static function addCommands(array $commands): void
        {
            
            /** @var \think\Console $instance */
            $instance->addCommands($commands);
        }
        
        /**
         * 添加一个指令
         * @access public
         *
         * @param string|\think\console\Command $command 指令对象或者指令类名
         * @param string                        $name    指令名 留空则自动获取
         *
         * @return \think\console\Command|void
         */
        public static function addCommand($command, string $name = '')
        {
            
            /** @var \think\Console $instance */
            $instance->addCommand($command, $name);
        }
        
        /**
         * 获取指令
         * @access public
         *
         * @param string $name 指令名称
         *
         * @return \think\console\Command
         * @throws \think\exception\InvalidArgumentException
         */
        public static function getCommand(string $name): \think\console\Command
        {
            
            /** @var \think\Console $instance */
            return $instance->getCommand($name);
        }
        
        /**
         * 某个指令是否存在
         * @access public
         *
         * @param string $name 指令名称
         *
         * @return bool
         */
        public static function hasCommand(string $name): bool
        {
            
            /** @var \think\Console $instance */
            return $instance->hasCommand($name);
        }
        
        /**
         * 获取所有的命名空间
         * @access public
         * @return array
         */
        public static function getNamespaces(): array
        {
            
            /** @var \think\Console $instance */
            return $instance->getNamespaces();
        }
        
        /**
         * 查找注册命名空间中的名称或缩写。
         * @access public
         *
         * @param string $namespace
         *
         * @return string
         * @throws \think\exception\InvalidArgumentException
         */
        public static function findNamespace(string $namespace): string
        {
            
            /** @var \think\Console $instance */
            return $instance->findNamespace($namespace);
        }
        
        /**
         * 查找指令
         * @access public
         *
         * @param string $name 名称或者别名
         *
         * @return \think\console\Command
         * @throws \think\exception\InvalidArgumentException
         */
        public static function find(string $name): \think\console\Command
        {
            
            /** @var \think\Console $instance */
            return $instance->find($name);
        }
        
        /**
         * 获取所有的指令
         * @access public
         *
         * @param string $namespace 命名空间
         *
         * @return \think\console\Command[]
         * @api
         */
        public static function all(string $namespace = null): array
        {
            
            /** @var \think\Console $instance */
            return $instance->all($namespace);
        }
        
        /**
         * 返回命名空间部分
         * @access public
         *
         * @param string $name  指令
         * @param int    $limit 部分的命名空间的最大数量
         *
         * @return string
         */
        public static function extractNamespace(string $name, int $limit = 0): string
        {
            
            /** @var \think\Console $instance */
            return $instance->extractNamespace($name, $limit);
        }
        
    }
    
    /**
     * @see     \think\Cookie
     * @package think\facade
     * @mixin \think\Cookie
     */
    class Cookie
    {
        /**
         * 获取cookie
         * @access public
         *
         * @param  mixed  $name    数据名称
         * @param  string $default 默认值
         *
         * @return mixed
         */
        public static function get(string $name = '', $default = null)
        {
            
            /** @var \think\Cookie $instance */
            return $instance->get($name, $default);
        }
        
        /**
         * 是否存在Cookie参数
         * @access public
         *
         * @param  string $name 变量名
         *
         * @return bool
         */
        public static function has(string $name): bool
        {
            
            /** @var \think\Cookie $instance */
            return $instance->has($name);
        }
        
        /**
         * Cookie 设置
         *
         * @access public
         *
         * @param  string $name   cookie名称
         * @param  string $value  cookie值
         * @param  mixed  $option 可选参数
         *
         * @return void
         */
        public static function set(string $name, string $value, $option = null): void
        {
            
            /** @var \think\Cookie $instance */
            $instance->set($name, $value, $option);
        }
        
        /**
         * 永久保存Cookie数据
         * @access public
         *
         * @param  string $name   cookie名称
         * @param  string $value  cookie值
         * @param  mixed  $option 可选参数 可能会是 null|integer|string
         *
         * @return void
         */
        public static function forever(string $name, string $value = '', $option = null): void
        {
            
            /** @var \think\Cookie $instance */
            $instance->forever($name, $value, $option);
        }
        
        /**
         * Cookie删除
         * @access public
         *
         * @param  string $name cookie名称
         *
         * @return void
         */
        public static function delete(string $name): void
        {
            
            /** @var \think\Cookie $instance */
            $instance->delete($name);
        }
        
        /**
         * 获取cookie保存数据
         * @access public
         * @return array
         */
        public static function getCookie(): array
        {
            
            /** @var \think\Cookie $instance */
            return $instance->getCookie();
        }
        
        /**
         * 保存Cookie
         * @access public
         * @return void
         */
        public static function save(): void
        {
            
            /** @var \think\Cookie $instance */
            $instance->save();
        }
        
    }
    
    /**
     * @see     \think\Env
     * @package think\facade
     * @mixin \think\Env
     */
    class Env
    {
        /**
         * 读取环境变量定义文件
         * @access public
         *
         * @param string $file 环境变量定义文件
         *
         * @return void
         */
        public static function load(string $file): void
        {
            
            /** @var \think\Env $instance */
            $instance->load($file);
        }
        
        /**
         * 获取环境变量值
         * @access public
         *
         * @param string $name    环境变量名
         * @param mixed  $default 默认值
         *
         * @return mixed
         */
        public static function get(string $name = null, $default = null)
        {
            
            /** @var \think\Env $instance */
            return $instance->get($name, $default);
        }
        
        /**
         * 设置环境变量值
         * @access public
         *
         * @param string|array $env   环境变量
         * @param mixed        $value 值
         *
         * @return void
         */
        public static function set($env, $value = null): void
        {
            
            /** @var \think\Env $instance */
            $instance->set($env, $value);
        }
        
        /**
         * 检测是否存在环境变量
         * @access public
         *
         * @param string $name 参数名
         *
         * @return bool
         */
        public static function has(string $name): bool
        {
            
            /** @var \think\Env $instance */
            return $instance->has($name);
        }
        
    }
    
    /**
     * @see     \think\Event
     * @package think\facade
     * @mixin \think\Event
     */
    class Event
    {
        /**
         * 设置是否开启事件响应
         * @access protected
         *
         * @param bool $event 是否需要事件响应
         *
         * @return \think\Event
         */
        public static function withEvent(bool $event)
        {
            
            /** @var \think\Event $instance */
            return $instance->withEvent($event);
        }
        
        /**
         * 批量注册事件监听
         * @access public
         *
         * @param array $events 事件定义
         *
         * @return \think\Event
         */
        public static function listenEvents(array $events)
        {
            
            /** @var \think\Event $instance */
            return $instance->listenEvents($events);
        }
        
        /**
         * 注册事件监听
         * @access public
         *
         * @param string $event    事件名称
         * @param mixed  $listener 监听操作（或者类名）
         * @param bool   $first    是否优先执行
         *
         * @return \think\Event
         */
        public static function listen(string $event, $listener, bool $first = false)
        {
            
            /** @var \think\Event $instance */
            return $instance->listen($event, $listener, $first);
        }
        
        /**
         * 是否存在事件监听
         * @access public
         *
         * @param string $event 事件名称
         *
         * @return bool
         */
        public static function hasListener(string $event): bool
        {
            
            /** @var \think\Event $instance */
            return $instance->hasListener($event);
        }
        
        /**
         * 移除事件监听
         * @access public
         *
         * @param string $event 事件名称
         *
         * @return void
         */
        public static function remove(string $event): void
        {
            
            /** @var \think\Event $instance */
            $instance->remove($event);
        }
        
        /**
         * 指定事件别名标识 便于调用
         * @access public
         *
         * @param array $events 事件别名
         *
         * @return \think\Event
         */
        public static function bind(array $events)
        {
            
            /** @var \think\Event $instance */
            return $instance->bind($events);
        }
        
        /**
         * 注册事件订阅者
         * @access public
         *
         * @param mixed $subscriber 订阅者
         *
         * @return \think\Event
         */
        public static function subscribe($subscriber)
        {
            
            /** @var \think\Event $instance */
            return $instance->subscribe($subscriber);
        }
        
        /**
         * 自动注册事件观察者
         * @access public
         *
         * @param string|object $observer 观察者
         * @param null|string   $prefix   事件名前缀
         *
         * @return \think\Event
         */
        public static function observe($observer, string $prefix = '')
        {
            
            /** @var \think\Event $instance */
            return $instance->observe($observer, $prefix);
        }
        
        /**
         * 触发事件
         * @access public
         *
         * @param string|object $event  事件名称
         * @param mixed         $params 传入参数
         * @param bool          $once   只获取一个有效返回值
         *
         * @return mixed
         */
        public static function trigger($event, $params = null, bool $once = false)
        {
            
            /** @var \think\Event $instance */
            return $instance->trigger($event, $params, $once);
        }
        
        /**
         * 触发事件(只获取一个有效返回值)
         *
         * @param      $event
         * @param null $params
         *
         * @return mixed
         */
        public static function until($event, $params = null)
        {
            
            /** @var \think\Event $instance */
            return $instance->until($event, $params);
        }
        
    }
    
    /**
     * @see     \think\Filesystem
     * @package think\facade
     * @mixin \think\Filesystem
     */
    class Filesystem
    {
        /**
         * @param null|string $name
         *
         * @return \think\filesystem\Driver
         */
        public static function disk(string $name = null): \think\filesystem\Driver
        {
            
            /** @var \think\Filesystem $instance */
            return $instance->disk($name);
        }
        
        /**
         * 获取缓存配置
         * @access public
         *
         * @param null|string $name    名称
         * @param mixed       $default 默认值
         *
         * @return mixed
         */
        public static function getConfig(string $name = null, $default = null)
        {
            
            /** @var \think\Filesystem $instance */
            return $instance->getConfig($name, $default);
        }
        
        /**
         * 获取磁盘配置
         *
         * @param string $disk
         * @param null   $name
         * @param null   $default
         *
         * @return array
         */
        public static function getDiskConfig($disk, $name = null, $default = null)
        {
            
            /** @var \think\Filesystem $instance */
            return $instance->getDiskConfig($disk, $name, $default);
        }
        
        /**
         * 默认驱动
         * @return string|null
         */
        public static function getDefaultDriver()
        {
            
            /** @var \think\Filesystem $instance */
            return $instance->getDefaultDriver();
        }
        
    }
    
    /**
     * @see     \think\Lang
     * @package think\facade
     * @mixin \think\Lang
     */
    class Lang
    {
        /**
         * 设置当前语言
         * @access public
         *
         * @param string $lang 语言
         *
         * @return void
         */
        public static function setLangSet(string $lang): void
        {
            
            /** @var \think\Lang $instance */
            $instance->setLangSet($lang);
        }
        
        /**
         * 获取当前语言
         * @access public
         * @return string
         */
        public static function getLangSet(): string
        {
            
            /** @var \think\Lang $instance */
            return $instance->getLangSet();
        }
        
        /**
         * 获取默认语言
         * @access public
         * @return string
         */
        public static function defaultLangSet()
        {
            
            /** @var \think\Lang $instance */
            return $instance->defaultLangSet();
        }
        
        /**
         * 加载语言定义(不区分大小写)
         * @access public
         *
         * @param string|array $file  语言文件
         * @param string       $range 语言作用域
         *
         * @return array
         */
        public static function load($file, $range = ''): array
        {
            
            /** @var \think\Lang $instance */
            return $instance->load($file, $range);
        }
        
        /**
         * 判断是否存在语言定义(不区分大小写)
         * @access public
         *
         * @param string|null $name  语言变量
         * @param string      $range 语言作用域
         *
         * @return bool
         */
        public static function has(string $name, string $range = ''): bool
        {
            
            /** @var \think\Lang $instance */
            return $instance->has($name, $range);
        }
        
        /**
         * 获取语言定义(不区分大小写)
         * @access public
         *
         * @param string|null $name  语言变量
         * @param array       $vars  变量替换
         * @param string      $range 语言作用域
         *
         * @return mixed
         */
        public static function get(string $name = null, array $vars = [], string $range = '')
        {
            
            /** @var \think\Lang $instance */
            return $instance->get($name, $vars, $range);
        }
        
        /**
         * 自动侦测设置获取语言选择
         * @access public
         *
         * @param Request $request
         *
         * @return string
         */
        public static function detect(Request $request): string
        {
            
            /** @var \think\Lang $instance */
            return $instance->detect($request);
        }
        
        /**
         * 保存当前语言到Cookie
         * @access public
         *
         * @param Cookie $cookie Cookie对象
         *
         * @return void
         */
        public static function saveToCookie(Cookie $cookie)
        {
            
            /** @var \think\Lang $instance */
            $instance->saveToCookie($cookie);
        }
        
    }
    
    /**
     * @see     \think\Log
     * @package think\facade
     * @mixin \think\Log
     */
    class Log
    {
        /**
         * 默认驱动
         * @return string|null
         */
        public static function getDefaultDriver()
        {
            
            /** @var \think\Log $instance */
            return $instance->getDefaultDriver();
        }
        
        /**
         * 获取日志配置
         * @access public
         *
         * @param null|string $name    名称
         * @param mixed       $default 默认值
         *
         * @return mixed
         */
        public static function getConfig(string $name = null, $default = null)
        {
            
            /** @var \think\Log $instance */
            return $instance->getConfig($name, $default);
        }
        
        /**
         * 获取渠道配置
         *
         * @param string $channel
         * @param null   $name
         * @param null   $default
         *
         * @return array
         */
        public static function getChannelConfig($channel, $name = null, $default = null)
        {
            
            /** @var \think\Log $instance */
            return $instance->getChannelConfig($channel, $name, $default);
        }
        
        /**
         * driver()的别名
         *
         * @param string|array $name 渠道名
         *
         * @return \think\log\Channel|\think\log\ChannelSet
         */
        public static function channel($name = null)
        {
            
            /** @var \think\Log $instance */
            return $instance->channel($name);
        }
        
        /**
         * 清空日志信息
         * @access public
         *
         * @param string|array $channel 日志通道名
         *
         * @return \think\Log
         */
        public static function clear($channel = '*')
        {
            
            /** @var \think\Log $instance */
            return $instance->clear($channel);
        }
        
        /**
         * 关闭本次请求日志写入
         * @access public
         *
         * @param string|array $channel 日志通道名
         *
         * @return \think\Log
         */
        public static function close($channel = '*')
        {
            
            /** @var \think\Log $instance */
            return $instance->close($channel);
        }
        
        /**
         * 获取日志信息
         * @access public
         *
         * @param string $channel 日志通道名
         *
         * @return array
         */
        public static function getLog(string $channel = null): array
        {
            
            /** @var \think\Log $instance */
            return $instance->getLog($channel);
        }
        
        /**
         * 保存日志信息
         * @access public
         * @return bool
         */
        public static function save(): bool
        {
            
            /** @var \think\Log $instance */
            return $instance->save();
        }
        
        /**
         * 记录日志信息
         * @access public
         *
         * @param mixed  $msg     日志信息
         * @param string $type    日志级别
         * @param array  $context 替换内容
         * @param bool   $lazy
         *
         * @return \think\Log
         */
        public static function record($msg, string $type = 'info', array $context = [], bool $lazy = true)
        {
            
            /** @var \think\Log $instance */
            return $instance->record($msg, $type, $context, $lazy);
        }
        
        /**
         * 实时写入日志信息
         * @access public
         *
         * @param mixed  $msg     调试信息
         * @param string $type    日志级别
         * @param array  $context 替换内容
         *
         * @return \think\Log
         */
        public static function write($msg, string $type = 'info', array $context = [])
        {
            
            /** @var \think\Log $instance */
            return $instance->write($msg, $type, $context);
        }
        
        /**
         * 注册日志写入事件监听
         *
         * @param $listener
         *
         * @return \think\Event
         */
        public static function listen($listener)
        {
            
            /** @var \think\Log $instance */
            return $instance->listen($listener);
        }
        
        /**
         * 记录日志信息
         * @access public
         *
         * @param string $level   日志级别
         * @param mixed  $message 日志信息
         * @param array  $context 替换内容
         *
         * @return void
         */
        public static function log($level, $message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->log($level, $message, $context);
        }
        
        /**
         * 记录emergency信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function emergency($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->emergency($message, $context);
        }
        
        /**
         * 记录警报信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function alert($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->alert($message, $context);
        }
        
        /**
         * 记录紧急情况
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function critical($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->critical($message, $context);
        }
        
        /**
         * 记录错误信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function error($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->error($message, $context);
        }
        
        /**
         * 记录warning信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function warning($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->warning($message, $context);
        }
        
        /**
         * 记录notice信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function notice($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->notice($message, $context);
        }
        
        /**
         * 记录一般信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function info($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->info($message, $context);
        }
        
        /**
         * 记录调试信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function debug($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->debug($message, $context);
        }
        
        /**
         * 记录sql信息
         * @access public
         *
         * @param mixed $message 日志信息
         * @param array $context 替换内容
         *
         * @return void
         */
        public static function sql($message, array $context = []): void
        {
            
            /** @var \think\Log $instance */
            $instance->sql($message, $context);
        }
        
    }
    
    /**
     * @see     \think\Middleware
     * @package think\facade
     * @mixin \think\Middleware
     */
    class Middleware
    {
        /**
         * 导入中间件
         * @access public
         *
         * @param array  $middlewares
         * @param string $type 中间件类型
         *
         * @return void
         */
        public static function import(array $middlewares = [], string $type = 'global'): void
        {
            
            /** @var \think\Middleware $instance */
            $instance->import($middlewares, $type);
        }
        
        /**
         * 注册中间件
         * @access public
         *
         * @param mixed  $middleware
         * @param string $type 中间件类型
         *
         * @return void
         */
        public static function add($middleware, string $type = 'global'): void
        {
            
            /** @var \think\Middleware $instance */
            $instance->add($middleware, $type);
        }
        
        /**
         * 注册路由中间件
         * @access public
         *
         * @param mixed $middleware
         *
         * @return void
         */
        public static function route($middleware): void
        {
            
            /** @var \think\Middleware $instance */
            $instance->route($middleware);
        }
        
        /**
         * 注册控制器中间件
         * @access public
         *
         * @param mixed $middleware
         *
         * @return void
         */
        public static function controller($middleware): void
        {
            
            /** @var \think\Middleware $instance */
            $instance->controller($middleware);
        }
        
        /**
         * 注册中间件到开始位置
         * @access public
         *
         * @param mixed  $middleware
         * @param string $type 中间件类型
         */
        public static function unshift($middleware, string $type = 'global')
        {
            
            /** @var \think\Middleware $instance */
            $instance->unshift($middleware, $type);
        }
        
        /**
         * 获取注册的中间件
         * @access public
         *
         * @param string $type 中间件类型
         *
         * @return array
         */
        public static function all(string $type = 'global'): array
        {
            
            /** @var \think\Middleware $instance */
            return $instance->all($type);
        }
        
        /**
         * 调度管道
         * @access public
         *
         * @param string $type 中间件类型
         *
         * @return \think\Pipeline
         */
        public static function pipeline(string $type = 'global')
        {
            
            /** @var \think\Middleware $instance */
            return $instance->pipeline($type);
        }
        
        /**
         * 结束调度
         *
         * @param \think\Response $response
         */
        public static function end(\think\Response $response)
        {
            
            /** @var \think\Middleware $instance */
            $instance->end($response);
        }
        
        /**
         * 异常处理
         *
         * @param Request    $passable
         * @param \Throwable $e
         *
         * @return \think\Response
         */
        public static function handleException($passable, \Throwable $e)
        {
            
            /** @var \think\Middleware $instance */
            return $instance->handleException($passable, $e);
        }
        
    }
    
    /**
     * @see     \think\Request
     * @package think\facade
     * @mixin \think\Request
     */
    class Request
    {
        /**
         * 设置当前包含协议的域名
         * @access public
         *
         * @param  string $domain 域名
         *
         * @return \think\Request
         */
        public static function setDomain(string $domain)
        {
            
            /** @var \think\Request $instance */
            return $instance->setDomain($domain);
        }
        
        /**
         * 获取当前包含协议的域名
         * @access public
         *
         * @param  bool $port 是否需要去除端口号
         *
         * @return string
         */
        public static function domain(bool $port = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->domain($port);
        }
        
        /**
         * 获取当前根域名
         * @access public
         * @return string
         */
        public static function rootDomain(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->rootDomain();
        }
        
        /**
         * 设置当前泛域名的值
         * @access public
         *
         * @param  string $domain 域名
         *
         * @return \think\Request
         */
        public static function setSubDomain(string $domain)
        {
            
            /** @var \think\Request $instance */
            return $instance->setSubDomain($domain);
        }
        
        /**
         * 获取当前子域名
         * @access public
         * @return string
         */
        public static function subDomain(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->subDomain();
        }
        
        /**
         * 设置当前泛域名的值
         * @access public
         *
         * @param  string $domain 域名
         *
         * @return \think\Request
         */
        public static function setPanDomain(string $domain)
        {
            
            /** @var \think\Request $instance */
            return $instance->setPanDomain($domain);
        }
        
        /**
         * 获取当前泛域名的值
         * @access public
         * @return string
         */
        public static function panDomain(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->panDomain();
        }
        
        /**
         * 设置当前完整URL 包括QUERY_STRING
         * @access public
         *
         * @param  string $url URL地址
         *
         * @return \think\Request
         */
        public static function setUrl(string $url)
        {
            
            /** @var \think\Request $instance */
            return $instance->setUrl($url);
        }
        
        /**
         * 获取当前完整URL 包括QUERY_STRING
         * @access public
         *
         * @param  bool $complete 是否包含完整域名
         *
         * @return string
         */
        public static function url(bool $complete = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->url($complete);
        }
        
        /**
         * 设置当前URL 不含QUERY_STRING
         * @access public
         *
         * @param  string $url URL地址
         *
         * @return \think\Request
         */
        public static function setBaseUrl(string $url)
        {
            
            /** @var \think\Request $instance */
            return $instance->setBaseUrl($url);
        }
        
        /**
         * 获取当前URL 不含QUERY_STRING
         * @access public
         *
         * @param  bool $complete 是否包含完整域名
         *
         * @return string
         */
        public static function baseUrl(bool $complete = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->baseUrl($complete);
        }
        
        /**
         * 获取当前执行的文件 SCRIPT_NAME
         * @access public
         *
         * @param  bool $complete 是否包含完整域名
         *
         * @return string
         */
        public static function baseFile(bool $complete = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->baseFile($complete);
        }
        
        /**
         * 设置URL访问根地址
         * @access public
         *
         * @param  string $url URL地址
         *
         * @return \think\Request
         */
        public static function setRoot(string $url)
        {
            
            /** @var \think\Request $instance */
            return $instance->setRoot($url);
        }
        
        /**
         * 获取URL访问根地址
         * @access public
         *
         * @param  bool $complete 是否包含完整域名
         *
         * @return string
         */
        public static function root(bool $complete = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->root($complete);
        }
        
        /**
         * 获取URL访问根目录
         * @access public
         * @return string
         */
        public static function rootUrl(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->rootUrl();
        }
        
        /**
         * 设置当前请求的pathinfo
         * @access public
         *
         * @param  string $pathinfo
         *
         * @return \think\Request
         */
        public static function setPathinfo(string $pathinfo)
        {
            
            /** @var \think\Request $instance */
            return $instance->setPathinfo($pathinfo);
        }
        
        /**
         * 获取当前请求URL的pathinfo信息（含URL后缀）
         * @access public
         * @return string
         */
        public static function pathinfo(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->pathinfo();
        }
        
        /**
         * 当前URL的访问后缀
         * @access public
         * @return string
         */
        public static function ext(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->ext();
        }
        
        /**
         * 获取当前请求的时间
         * @access public
         *
         * @param  bool $float 是否使用浮点类型
         *
         * @return integer|float
         */
        public static function time(bool $float = false)
        {
            
            /** @var \think\Request $instance */
            return $instance->time($float);
        }
        
        /**
         * 当前请求的资源类型
         * @access public
         * @return string
         */
        public static function type(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->type();
        }
        
        /**
         * 设置资源类型
         * @access public
         *
         * @param  string|array $type 资源类型名
         * @param  string       $val  资源类型
         *
         * @return \think\Request
         */
        public static function mimeType($type, $val = ''): void
        {
            
            /** @var \think\Request $instance */
            return $instance->mimeType($type, $val);
        }
        
        /**
         * 设置请求类型
         * @access public
         *
         * @param  string $method 请求类型
         *
         * @return \think\Request
         */
        public static function setMethod(string $method)
        {
            
            /** @var \think\Request $instance */
            return $instance->setMethod($method);
        }
        
        /**
         * 当前的请求类型
         * @access public
         *
         * @param  bool $origin 是否获取原始请求类型
         *
         * @return string
         */
        public static function method(bool $origin = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->method($origin);
        }
        
        /**
         * 是否为GET请求
         * @access public
         * @return bool
         */
        public static function isGet(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isGet();
        }
        
        /**
         * 是否为POST请求
         * @access public
         * @return bool
         */
        public static function isPost(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isPost();
        }
        
        /**
         * 是否为PUT请求
         * @access public
         * @return bool
         */
        public static function isPut(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isPut();
        }
        
        /**
         * 是否为DELTE请求
         * @access public
         * @return bool
         */
        public static function isDelete(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isDelete();
        }
        
        /**
         * 是否为HEAD请求
         * @access public
         * @return bool
         */
        public static function isHead(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isHead();
        }
        
        /**
         * 是否为PATCH请求
         * @access public
         * @return bool
         */
        public static function isPatch(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isPatch();
        }
        
        /**
         * 是否为OPTIONS请求
         * @access public
         * @return bool
         */
        public static function isOptions(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isOptions();
        }
        
        /**
         * 是否为cli
         * @access public
         * @return bool
         */
        public static function isCli(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isCli();
        }
        
        /**
         * 是否为cgi
         * @access public
         * @return bool
         */
        public static function isCgi(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isCgi();
        }
        
        /**
         * 获取当前请求的参数
         * @access public
         *
         * @param  string|array $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function param($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->param($name, $default, $filter);
        }
        
        /**
         * 设置路由变量
         * @access public
         *
         * @param  \think\route\Rule $rule 路由对象
         *
         * @return \think\Request
         */
        public static function setRule(\think\route\Rule $rule)
        {
            
            /** @var \think\Request $instance */
            return $instance->setRule($rule);
        }
        
        /**
         * 获取当前路由对象
         * @access public
         * @return \think\route\Rule|null
         */
        public static function rule()
        {
            
            /** @var \think\Request $instance */
            return $instance->rule();
        }
        
        /**
         * 设置路由变量
         * @access public
         *
         * @param  array $route 路由变量
         *
         * @return \think\Request
         */
        public static function setRoute(array $route)
        {
            
            /** @var \think\Request $instance */
            return $instance->setRoute($route);
        }
        
        /**
         * 获取路由参数
         * @access public
         *
         * @param  string|array $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function route($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->route($name, $default, $filter);
        }
        
        /**
         * 获取GET参数
         * @access public
         *
         * @param  string|array $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function get($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->get($name, $default, $filter);
        }
        
        /**
         * 获取中间件传递的参数
         * @access public
         *
         * @param  mixed $name    变量名
         * @param  mixed $default 默认值
         *
         * @return mixed
         */
        public static function middleware($name, $default = null)
        {
            
            /** @var \think\Request $instance */
            return $instance->middleware($name, $default);
        }
        
        /**
         * 获取POST参数
         * @access public
         *
         * @param  string|array $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function post($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->post($name, $default, $filter);
        }
        
        /**
         * 获取PUT参数
         * @access public
         *
         * @param  string|array $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function put($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->put($name, $default, $filter);
        }
        
        /**
         * 设置获取DELETE参数
         * @access public
         *
         * @param  mixed        $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function delete($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->delete($name, $default, $filter);
        }
        
        /**
         * 设置获取PATCH参数
         * @access public
         *
         * @param  mixed        $name    变量名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function patch($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->patch($name, $default, $filter);
        }
        
        /**
         * 获取request变量
         * @access public
         *
         * @param  string|array $name    数据名称
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function request($name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->request($name, $default, $filter);
        }
        
        /**
         * 获取环境变量
         * @access public
         *
         * @param  string $name    数据名称
         * @param  string $default 默认值
         *
         * @return mixed
         */
        public static function env(string $name = '', string $default = null)
        {
            
            /** @var \think\Request $instance */
            return $instance->env($name, $default);
        }
        
        /**
         * 获取session数据
         * @access public
         *
         * @param  string $name    数据名称
         * @param  string $default 默认值
         *
         * @return mixed
         */
        public static function session(string $name = '', $default = null)
        {
            
            /** @var \think\Request $instance */
            return $instance->session($name, $default);
        }
        
        /**
         * 获取cookie参数
         * @access public
         *
         * @param  mixed        $name    数据名称
         * @param  string       $default 默认值
         * @param  string|array $filter  过滤方法
         *
         * @return mixed
         */
        public static function cookie(string $name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->cookie($name, $default, $filter);
        }
        
        /**
         * 获取server参数
         * @access public
         *
         * @param  string $name    数据名称
         * @param  string $default 默认值
         *
         * @return mixed
         */
        public static function server(string $name = '', string $default = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->server($name, $default);
        }
        
        /**
         * 获取上传的文件信息
         * @access public
         *
         * @param  string $name 名称
         *
         * @return null|array|\think\file\UploadedFile
         */
        public static function file(string $name = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->file($name);
        }
        
        /**
         * 设置或者获取当前的Header
         * @access public
         *
         * @param  string $name    header名称
         * @param  string $default 默认值
         *
         * @return string|array
         */
        public static function header(string $name = '', string $default = null)
        {
            
            /** @var \think\Request $instance */
            return $instance->header($name, $default);
        }
        
        /**
         * 获取变量 支持过滤和默认值
         * @access public
         *
         * @param  array        $data    数据源
         * @param  string|false $name    字段名
         * @param  mixed        $default 默认值
         * @param  string|array $filter  过滤函数
         *
         * @return mixed
         */
        public static function input(array $data = [], $name = '', $default = null, $filter = '')
        {
            
            /** @var \think\Request $instance */
            return $instance->input($data, $name, $default, $filter);
        }
        
        /**
         * 设置或获取当前的过滤规则
         * @access public
         *
         * @param  mixed $filter 过滤规则
         *
         * @return mixed
         */
        public static function filter($filter = null)
        {
            
            /** @var \think\Request $instance */
            return $instance->filter($filter);
        }
        
        /**
         * 递归过滤给定的值
         * @access public
         *
         * @param  mixed $value   键值
         * @param  mixed $key     键名
         * @param  array $filters 过滤方法+默认值
         *
         * @return mixed
         */
        public static function filterValue(&$value, $key, $filters)
        {
            
            /** @var \think\Request $instance */
            return $instance->filterValue($value, $key, $filters);
        }
        
        /**
         * 是否存在某个请求参数
         * @access public
         *
         * @param  string $name       变量名
         * @param  string $type       变量类型
         * @param  bool   $checkEmpty 是否检测空值
         *
         * @return bool
         */
        public static function has(string $name, string $type = 'param', bool $checkEmpty = false): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->has($name, $type, $checkEmpty);
        }
        
        /**
         * 获取指定的参数
         * @access public
         *
         * @param  array        $name   变量名
         * @param  mixed        $data   数据或者变量类型
         * @param  string|array $filter 过滤方法
         *
         * @return array
         */
        public static function only(array $name, $data = 'param', $filter = ''): array
        {
            
            /** @var \think\Request $instance */
            return $instance->only($name, $data, $filter);
        }
        
        /**
         * 排除指定参数获取
         * @access public
         *
         * @param  array  $name 变量名
         * @param  string $type 变量类型
         *
         * @return mixed
         */
        public static function except(array $name, string $type = 'param'): array
        {
            
            /** @var \think\Request $instance */
            return $instance->except($name, $type);
        }
        
        /**
         * 当前是否ssl
         * @access public
         * @return bool
         */
        public static function isSsl(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isSsl();
        }
        
        /**
         * 当前是否JSON请求
         * @access public
         * @return bool
         */
        public static function isJson(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isJson();
        }
        
        /**
         * 当前是否Ajax请求
         * @access public
         *
         * @param  bool $ajax true 获取原始ajax请求
         *
         * @return bool
         */
        public static function isAjax(bool $ajax = false): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isAjax($ajax);
        }
        
        /**
         * 当前是否Pjax请求
         * @access public
         *
         * @param  bool $pjax true 获取原始pjax请求
         *
         * @return bool
         */
        public static function isPjax(bool $pjax = false): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isPjax($pjax);
        }
        
        /**
         * 获取客户端IP地址
         * @access public
         * @return string
         */
        public static function ip(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->ip();
        }
        
        /**
         * 检测是否是合法的IP地址
         *
         * @param string $ip   IP地址
         * @param string $type IP地址类型 (ipv4, ipv6)
         *
         * @return boolean
         */
        public static function isValidIP(string $ip, string $type = ''): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isValidIP($ip, $type);
        }
        
        /**
         * 将IP地址转换为二进制字符串
         *
         * @param string $ip
         *
         * @return string
         */
        public static function ip2bin(string $ip): string
        {
            
            /** @var \think\Request $instance */
            return $instance->ip2bin($ip);
        }
        
        /**
         * 检测是否使用手机访问
         * @access public
         * @return bool
         */
        public static function isMobile(): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->isMobile();
        }
        
        /**
         * 当前URL地址中的scheme参数
         * @access public
         * @return string
         */
        public static function scheme(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->scheme();
        }
        
        /**
         * 当前请求URL地址中的query参数
         * @access public
         * @return string
         */
        public static function query(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->query();
        }
        
        /**
         * 设置当前请求的host（包含端口）
         * @access public
         *
         * @param  string $host 主机名（含端口）
         *
         * @return \think\Request
         */
        public static function setHost(string $host)
        {
            
            /** @var \think\Request $instance */
            return $instance->setHost($host);
        }
        
        /**
         * 当前请求的host
         * @access public
         *
         * @param bool $strict true 仅仅获取HOST
         *
         * @return string
         */
        public static function host(bool $strict = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->host($strict);
        }
        
        /**
         * 当前请求URL地址中的port参数
         * @access public
         * @return int
         */
        public static function port(): int
        {
            
            /** @var \think\Request $instance */
            return $instance->port();
        }
        
        /**
         * 当前请求 SERVER_PROTOCOL
         * @access public
         * @return string
         */
        public static function protocol(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->protocol();
        }
        
        /**
         * 当前请求 REMOTE_PORT
         * @access public
         * @return int
         */
        public static function remotePort(): int
        {
            
            /** @var \think\Request $instance */
            return $instance->remotePort();
        }
        
        /**
         * 当前请求 HTTP_CONTENT_TYPE
         * @access public
         * @return string
         */
        public static function contentType(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->contentType();
        }
        
        /**
         * 获取当前请求的安全Key
         * @access public
         * @return string
         */
        public static function secureKey(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->secureKey();
        }
        
        /**
         * 设置当前的控制器名
         * @access public
         *
         * @param  string $controller 控制器名
         *
         * @return \think\Request
         */
        public static function setController(string $controller)
        {
            
            /** @var \think\Request $instance */
            return $instance->setController($controller);
        }
        
        /**
         * 设置当前的操作名
         * @access public
         *
         * @param  string $action 操作名
         *
         * @return \think\Request
         */
        public static function setAction(string $action)
        {
            
            /** @var \think\Request $instance */
            return $instance->setAction($action);
        }
        
        /**
         * 获取当前的控制器名
         * @access public
         *
         * @param  bool $convert 转换为小写
         *
         * @return string
         */
        public static function controller(bool $convert = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->controller($convert);
        }
        
        /**
         * 获取当前的操作名
         * @access public
         *
         * @param  bool $convert 转换为小写
         *
         * @return string
         */
        public static function action(bool $convert = false): string
        {
            
            /** @var \think\Request $instance */
            return $instance->action($convert);
        }
        
        /**
         * 设置或者获取当前请求的content
         * @access public
         * @return string
         */
        public static function getContent(): string
        {
            
            /** @var \think\Request $instance */
            return $instance->getContent();
        }
        
        /**
         * 生成请求令牌
         * @access public
         *
         * @param  string $name 令牌名称
         * @param  mixed  $type 令牌生成方法
         *
         * @return string
         */
        public static function buildToken(string $name = '__token__', $type = 'md5'): string
        {
            
            /** @var \think\Request $instance */
            return $instance->buildToken($name, $type);
        }
        
        /**
         * 检查请求令牌
         * @access public
         *
         * @param  string $token 令牌名称
         * @param  array  $data  表单数据
         *
         * @return bool
         */
        public static function checkToken(string $token = '__token__', array $data = []): bool
        {
            
            /** @var \think\Request $instance */
            return $instance->checkToken($token, $data);
        }
        
        /**
         * 设置在中间件传递的数据
         * @access public
         *
         * @param  array $middleware 数据
         *
         * @return \think\Request
         */
        public static function withMiddleware(array $middleware)
        {
            
            /** @var \think\Request $instance */
            return $instance->withMiddleware($middleware);
        }
        
        /**
         * 设置GET数据
         * @access public
         *
         * @param  array $get 数据
         *
         * @return \think\Request
         */
        public static function withGet(array $get)
        {
            
            /** @var \think\Request $instance */
            return $instance->withGet($get);
        }
        
        /**
         * 设置POST数据
         * @access public
         *
         * @param  array $post 数据
         *
         * @return \think\Request
         */
        public static function withPost(array $post)
        {
            
            /** @var \think\Request $instance */
            return $instance->withPost($post);
        }
        
        /**
         * 设置COOKIE数据
         * @access public
         *
         * @param array $cookie 数据
         *
         * @return \think\Request
         */
        public static function withCookie(array $cookie)
        {
            
            /** @var \think\Request $instance */
            return $instance->withCookie($cookie);
        }
        
        /**
         * 设置SESSION数据
         * @access public
         *
         * @param Session $session 数据
         *
         * @return \think\Request
         */
        public static function withSession(Session $session)
        {
            
            /** @var \think\Request $instance */
            return $instance->withSession($session);
        }
        
        /**
         * 设置SERVER数据
         * @access public
         *
         * @param  array $server 数据
         *
         * @return \think\Request
         */
        public static function withServer(array $server)
        {
            
            /** @var \think\Request $instance */
            return $instance->withServer($server);
        }
        
        /**
         * 设置HEADER数据
         * @access public
         *
         * @param  array $header 数据
         *
         * @return \think\Request
         */
        public static function withHeader(array $header)
        {
            
            /** @var \think\Request $instance */
            return $instance->withHeader($header);
        }
        
        /**
         * 设置ENV数据
         * @access public
         *
         * @param Env $env 数据
         *
         * @return \think\Request
         */
        public static function withEnv(Env $env)
        {
            
            /** @var \think\Request $instance */
            return $instance->withEnv($env);
        }
        
        /**
         * 设置文件上传数据
         * @access public
         *
         * @param  array $files 上传信息
         *
         * @return \think\Request
         */
        public static function withFiles(array $files)
        {
            
            /** @var \think\Request $instance */
            return $instance->withFiles($files);
        }
        
        /**
         * 设置ROUTE变量
         * @access public
         *
         * @param  array $route 数据
         *
         * @return \think\Request
         */
        public static function withRoute(array $route)
        {
            
            /** @var \think\Request $instance */
            return $instance->withRoute($route);
        }
        
    }
    
    /**
     * @see     \think\Route
     * @package think\facade
     * @mixin \think\Route
     */
    class Route
    {
        /**
         * 设置路由域名及分组（包括资源路由）是否延迟解析
         * @access public
         *
         * @param bool $lazy 路由是否延迟解析
         *
         * @return \think\Route
         */
        public static function lazy(bool $lazy = true)
        {
            
            /** @var \think\Route $instance */
            return $instance->lazy($lazy);
        }
        
        /**
         * 设置路由为测试模式
         * @access public
         *
         * @param bool $test 路由是否测试模式
         *
         * @return void
         */
        public static function setTestMode(bool $test): void
        {
            
            /** @var \think\Route $instance */
            $instance->setTestMode($test);
        }
        
        /**
         * 检查路由是否为测试模式
         * @access public
         * @return bool
         */
        public static function isTest(): bool
        {
            
            /** @var \think\Route $instance */
            return $instance->isTest();
        }
        
        /**
         * 设置路由域名及分组（包括资源路由）是否合并解析
         * @access public
         *
         * @param bool $merge 路由是否合并解析
         *
         * @return \think\Route
         */
        public static function mergeRuleRegex(bool $merge = true)
        {
            
            /** @var \think\Route $instance */
            return $instance->mergeRuleRegex($merge);
        }
        
        /**
         * 设置当前分组
         * @access public
         *
         * @param \think\route\RuleGroup $group 域名
         *
         * @return void
         */
        public static function setGroup(\think\route\RuleGroup $group): void
        {
            
            /** @var \think\Route $instance */
            $instance->setGroup($group);
        }
        
        /**
         * 获取指定标识的路由分组 不指定则获取当前分组
         * @access public
         *
         * @param string $name 分组标识
         *
         * @return \think\route\RuleGroup
         */
        public static function getGroup(string $name = null)
        {
            
            /** @var \think\Route $instance */
            return $instance->getGroup($name);
        }
        
        /**
         * 注册变量规则
         * @access public
         *
         * @param array $pattern 变量规则
         *
         * @return \think\Route
         */
        public static function pattern(array $pattern)
        {
            
            /** @var \think\Route $instance */
            return $instance->pattern($pattern);
        }
        
        /**
         * 注册路由参数
         * @access public
         *
         * @param array $option 参数
         *
         * @return \think\Route
         */
        public static function option(array $option)
        {
            
            /** @var \think\Route $instance */
            return $instance->option($option);
        }
        
        /**
         * 注册域名路由
         * @access public
         *
         * @param string|array $name 子域名
         * @param mixed        $rule 路由规则
         *
         * @return \think\route\Domain
         */
        public static function domain($name, $rule = null): \think\route\Domain
        {
            
            /** @var \think\Route $instance */
            return $instance->domain($name, $rule);
        }
        
        /**
         * 获取域名
         * @access public
         * @return array
         */
        public static function getDomains(): array
        {
            
            /** @var \think\Route $instance */
            return $instance->getDomains();
        }
        
        /**
         * 获取RuleName对象
         * @access public
         * @return \think\route\RuleName
         */
        public static function getRuleName(): \think\route\RuleName
        {
            
            /** @var \think\Route $instance */
            return $instance->getRuleName();
        }
        
        /**
         * 设置路由绑定
         * @access public
         *
         * @param string $bind   绑定信息
         * @param string $domain 域名
         *
         * @return \think\Route
         */
        public static function bind(string $bind, string $domain = null)
        {
            
            /** @var \think\Route $instance */
            return $instance->bind($bind, $domain);
        }
        
        /**
         * 读取路由绑定信息
         * @access public
         * @return array
         */
        public static function getBind(): array
        {
            
            /** @var \think\Route $instance */
            return $instance->getBind();
        }
        
        /**
         * 读取路由绑定
         * @access public
         *
         * @param string $domain 域名
         *
         * @return string|null
         */
        public static function getDomainBind(string $domain = null)
        {
            
            /** @var \think\Route $instance */
            return $instance->getDomainBind($domain);
        }
        
        /**
         * 读取路由标识
         * @access public
         *
         * @param string $name   路由标识
         * @param string $domain 域名
         * @param string $method 请求类型
         *
         * @return \think\route\RuleItem[]
         */
        public static function getName(string $name = null, string $domain = null, string $method = '*'): array
        {
            
            /** @var \think\Route $instance */
            return $instance->getName($name, $domain, $method);
        }
        
        /**
         * 批量导入路由标识
         * @access public
         *
         * @param array $name 路由标识
         *
         * @return \think\Route
         */
        public static function import(array $name): void
        {
            
            /** @var \think\Route $instance */
            return $instance->import($name);
        }
        
        /**
         * 注册路由标识
         * @access public
         *
         * @param string                $name     路由标识
         * @param \think\route\RuleName $ruleItem 路由规则
         * @param bool                  $first    是否优先
         *
         * @return void
         */
        public static function setName(string $name, \think\route\RuleItem $ruleItem, bool $first = false): void
        {
            
            /** @var \think\Route $instance */
            $instance->setName($name, $ruleItem, $first);
        }
        
        /**
         * 保存路由规则
         * @access public
         *
         * @param string                $rule     路由规则
         * @param \think\route\RuleItem $ruleItem RuleItem对象
         *
         * @return void
         */
        public static function setRule(string $rule, \think\route\RuleItem $ruleItem = null): void
        {
            
            /** @var \think\Route $instance */
            $instance->setRule($rule, $ruleItem);
        }
        
        /**
         * 读取路由
         * @access public
         *
         * @param string $rule 路由规则
         *
         * @return \think\route\RuleItem[]
         */
        public static function getRule(string $rule): array
        {
            
            /** @var \think\Route $instance */
            return $instance->getRule($rule);
        }
        
        /**
         * 读取路由列表
         * @access public
         * @return array
         */
        public static function getRuleList(): array
        {
            
            /** @var \think\Route $instance */
            return $instance->getRuleList();
        }
        
        /**
         * 清空路由规则
         * @access public
         * @return void
         */
        public static function clear(): void
        {
            
            /** @var \think\Route $instance */
            $instance->clear();
        }
        
        /**
         * 注册路由规则
         * @access public
         *
         * @param string $rule   路由规则
         * @param mixed  $route  路由地址
         * @param string $method 请求类型
         *
         * @return \think\route\RuleItem
         */
        public static function rule(string $rule, $route = null, string $method = '*'): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->rule($rule, $route, $method);
        }
        
        /**
         * 设置跨域有效路由规则
         * @access public
         *
         * @param \think\route\Rule $rule   路由规则
         * @param string            $method 请求类型
         *
         * @return \think\Route
         */
        public static function setCrossDomainRule(\think\route\Rule $rule, string $method = '*')
        {
            
            /** @var \think\Route $instance */
            return $instance->setCrossDomainRule($rule, $method);
        }
        
        /**
         * 注册路由分组
         * @access public
         *
         * @param string|\Closure $name  分组名称或者参数
         * @param mixed           $route 分组路由
         *
         * @return \think\route\RuleGroup
         */
        public static function group($name, $route = null): \think\route\RuleGroup
        {
            
            /** @var \think\Route $instance */
            return $instance->group($name, $route);
        }
        
        /**
         * 注册路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function any(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->any($rule, $route);
        }
        
        /**
         * 注册GET路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function get(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->get($rule, $route);
        }
        
        /**
         * 注册POST路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function post(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->post($rule, $route);
        }
        
        /**
         * 注册PUT路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function put(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->put($rule, $route);
        }
        
        /**
         * 注册DELETE路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function delete(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->delete($rule, $route);
        }
        
        /**
         * 注册PATCH路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function patch(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->patch($rule, $route);
        }
        
        /**
         * 注册OPTIONS路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param mixed  $route 路由地址
         *
         * @return \think\route\RuleItem
         */
        public static function options(string $rule, $route): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->options($rule, $route);
        }
        
        /**
         * 注册资源路由
         * @access public
         *
         * @param string $rule  路由规则
         * @param string $route 路由地址
         *
         * @return \think\route\Resource
         */
        public static function resource(string $rule, string $route): \think\route\Resource
        {
            
            /** @var \think\Route $instance */
            return $instance->resource($rule, $route);
        }
        
        /**
         * 注册视图路由
         * @access public
         *
         * @param string $rule     路由规则
         * @param string $template 路由模板地址
         * @param array  $vars     模板变量
         *
         * @return \think\route\RuleItem
         */
        public static function view(string $rule, string $template = '', array $vars = []): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->view($rule, $template, $vars);
        }
        
        /**
         * 注册重定向路由
         * @access public
         *
         * @param string $rule   路由规则
         * @param string $route  路由地址
         * @param int    $status 状态码
         *
         * @return \think\route\RuleItem
         */
        public static function redirect(string $rule, string $route = '', int $status = 301): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->redirect($rule, $route, $status);
        }
        
        /**
         * rest方法定义和修改
         * @access public
         *
         * @param string|array $name     方法名称
         * @param array|bool   $resource 资源
         *
         * @return \think\Route
         */
        public static function rest($name, $resource = [])
        {
            
            /** @var \think\Route $instance */
            return $instance->rest($name, $resource);
        }
        
        /**
         * 获取rest方法定义的参数
         * @access public
         *
         * @param string $name 方法名称
         *
         * @return array|null
         */
        public static function getRest(string $name = null)
        {
            
            /** @var \think\Route $instance */
            return $instance->getRest($name);
        }
        
        /**
         * 注册未匹配路由规则后的处理
         * @access public
         *
         * @param string|\Closure $route  路由地址
         * @param string          $method 请求类型
         *
         * @return \think\route\RuleItem
         */
        public static function miss($route, string $method = '*'): \think\route\RuleItem
        {
            
            /** @var \think\Route $instance */
            return $instance->miss($route, $method);
        }
        
        /**
         * 路由调度
         *
         * @param Request  $request
         * @param \Closure $withRoute
         *
         * @return \think\Response
         */
        public static function dispatch(Request $request, $withRoute = null)
        {
            
            /** @var \think\Route $instance */
            return $instance->dispatch($request, $withRoute);
        }
        
        /**
         * 检测URL路由
         * @access public
         * @return \think\route\Dispatch
         * @throws \think\exception\RouteNotFoundException
         */
        public static function check(): \think\route\Dispatch
        {
            
            /** @var \think\Route $instance */
            return $instance->check();
        }
        
        /**
         * 默认URL解析
         * @access public
         *
         * @param string $url URL地址
         *
         * @return \think\route\dispatch\Url
         */
        public static function url(string $url): \think\route\dispatch\Url
        {
            
            /** @var \think\Route $instance */
            return $instance->url($url);
        }
        
        /**
         * URL生成 支持路由反射
         * @access public
         *
         * @param string $url  路由地址
         * @param array  $vars 参数 ['a'=>'val1', 'b'=>'val2']
         *
         * @return \think\route\Url
         */
        public static function buildUrl(string $url = '', array $vars = []): \think\route\Url
        {
            
            /** @var \think\Route $instance */
            return $instance->buildUrl($url, $vars);
        }
        
    }
    
    /**
     * @see     \think\Session
     * @package think\facade
     * @mixin \think\Session
     */
    class Session
    {
        /**
         * 获取Session配置
         * @access public
         *
         * @param null|string $name    名称
         * @param mixed       $default 默认值
         *
         * @return mixed
         */
        public static function getConfig(string $name = null, $default = null)
        {
            
            /** @var \think\Session $instance */
            return $instance->getConfig($name, $default);
        }
        
        /**
         * 默认驱动
         * @return string|null
         */
        public static function getDefaultDriver()
        {
            
            /** @var \think\Session $instance */
            return $instance->getDefaultDriver();
        }
        
    }
    
    /**
     * @see     \think\Validate
     * @package think\facade
     * @mixin \think\Validate
     */
    class Validate
    {
        /**
         * 设置Lang对象
         * @access public
         *
         * @param Lang $lang Lang对象
         *
         * @return void
         */
        public static function setLang(Lang $lang)
        {
            
            /** @var \think\Validate $instance */
            $instance->setLang($lang);
        }
        
        /**
         * 设置Db对象
         * @access public
         *
         * @param Db $db Db对象
         *
         * @return void
         */
        public static function setDb(Db $db)
        {
            
            /** @var \think\Validate $instance */
            $instance->setDb($db);
        }
        
        /**
         * 设置Request对象
         * @access public
         *
         * @param Request $request Request对象
         *
         * @return void
         */
        public static function setRequest(Request $request)
        {
            
            /** @var \think\Validate $instance */
            $instance->setRequest($request);
        }
        
        /**
         * 添加字段验证规则
         * @access protected
         *
         * @param string|array $name 字段名称或者规则数组
         * @param mixed        $rule 验证规则或者字段描述信息
         *
         * @return \think\Validate
         */
        public static function rule($name, $rule = '')
        {
            
            /** @var \think\Validate $instance */
            return $instance->rule($name, $rule);
        }
        
        /**
         * 注册验证（类型）规则
         * @access public
         *
         * @param string   $type     验证规则类型
         * @param callable $callback callback方法(或闭包)
         * @param string   $message  验证失败提示信息
         *
         * @return \think\Validate
         */
        public static function extend(string $type, callable $callback = null, string $message = null)
        {
            
            /** @var \think\Validate $instance */
            return $instance->extend($type, $callback, $message);
        }
        
        /**
         * 设置验证规则的默认提示信息
         * @access public
         *
         * @param string|array $type 验证规则类型名称或者数组
         * @param string       $msg  验证提示信息
         *
         * @return void
         */
        public static function setTypeMsg($type, string $msg = null): void
        {
            
            /** @var \think\Validate $instance */
            $instance->setTypeMsg($type, $msg);
        }
        
        /**
         * 设置提示信息
         * @access public
         *
         * @param array $message 错误信息
         *
         * @return \think\Validate
         */
        public static function message(array $message)
        {
            
            /** @var \think\Validate $instance */
            return $instance->message($message);
        }
        
        /**
         * 设置验证场景
         * @access public
         *
         * @param string $name 场景名
         *
         * @return \think\Validate
         */
        public static function scene(string $name)
        {
            
            /** @var \think\Validate $instance */
            return $instance->scene($name);
        }
        
        /**
         * 判断是否存在某个验证场景
         * @access public
         *
         * @param string $name 场景名
         *
         * @return bool
         */
        public static function hasScene(string $name): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->hasScene($name);
        }
        
        /**
         * 设置批量验证
         * @access public
         *
         * @param bool $batch 是否批量验证
         *
         * @return \think\Validate
         */
        public static function batch(bool $batch = true)
        {
            
            /** @var \think\Validate $instance */
            return $instance->batch($batch);
        }
        
        /**
         * 设置验证失败后是否抛出异常
         * @access protected
         *
         * @param bool $fail 是否抛出异常
         *
         * @return \think\Validate
         */
        public static function failException(bool $fail = true)
        {
            
            /** @var \think\Validate $instance */
            return $instance->failException($fail);
        }
        
        /**
         * 指定需要验证的字段列表
         * @access public
         *
         * @param array $fields 字段名
         *
         * @return \think\Validate
         */
        public static function only(array $fields)
        {
            
            /** @var \think\Validate $instance */
            return $instance->only($fields);
        }
        
        /**
         * 移除某个字段的验证规则
         * @access public
         *
         * @param string|array $field 字段名
         * @param mixed        $rule  验证规则 true 移除所有规则
         *
         * @return \think\Validate
         */
        public static function remove($field, $rule = null)
        {
            
            /** @var \think\Validate $instance */
            return $instance->remove($field, $rule);
        }
        
        /**
         * 追加某个字段的验证规则
         * @access public
         *
         * @param string|array $field 字段名
         * @param mixed        $rule  验证规则
         *
         * @return \think\Validate
         */
        public static function append($field, $rule = null)
        {
            
            /** @var \think\Validate $instance */
            return $instance->append($field, $rule);
        }
        
        /**
         * 数据自动验证
         * @access public
         *
         * @param array $data  数据
         * @param array $rules 验证规则
         *
         * @return bool
         */
        public static function check(array $data, array $rules = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->check($data, $rules);
        }
        
        /**
         * 根据验证规则验证数据
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rules 验证规则
         *
         * @return bool
         */
        public static function checkRule($value, $rules): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->checkRule($value, $rules);
        }
        
        /**
         * 验证是否和某个字段的值一致
         * @access public
         *
         * @param mixed  $value 字段值
         * @param mixed  $rule  验证规则
         * @param array  $data  数据
         * @param string $field 字段名
         *
         * @return bool
         */
        public static function confirm($value, $rule, array $data = [], string $field = ''): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->confirm($value, $rule, $data, $field);
        }
        
        /**
         * 验证是否和某个字段的值是否不同
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function different($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->different($value, $rule, $data);
        }
        
        /**
         * 验证是否大于等于某个值
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function egt($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->egt($value, $rule, $data);
        }
        
        /**
         * 验证是否大于某个值
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function gt($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->gt($value, $rule, $data);
        }
        
        /**
         * 验证是否小于等于某个值
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function elt($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->elt($value, $rule, $data);
        }
        
        /**
         * 验证是否小于某个值
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function lt($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->lt($value, $rule, $data);
        }
        
        /**
         * 验证是否等于某个值
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function eq($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->eq($value, $rule);
        }
        
        /**
         * 必须验证
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function must($value, $rule = null): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->must($value, $rule);
        }
        
        /**
         * 验证字段值是否为有效格式
         * @access public
         *
         * @param mixed  $value 字段值
         * @param string $rule  验证规则
         * @param array  $data  数据
         *
         * @return bool
         */
        public static function is($value, string $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->is($value, $rule, $data);
        }
        
        /**
         * 验证表单令牌
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function token($value, string $rule, array $data): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->token($value, $rule, $data);
        }
        
        /**
         * 验证是否为合格的域名或者IP 支持A，MX，NS，SOA，PTR，CNAME，AAAA，A6， SRV，NAPTR，TXT 或者 ANY类型
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function activeUrl(string $value, string $rule = 'MX'): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->activeUrl($value, $rule);
        }
        
        /**
         * 验证是否有效IP
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则 ipv4 ipv6
         *
         * @return bool
         */
        public static function ip($value, string $rule = 'ipv4'): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->ip($value, $rule);
        }
        
        /**
         * 验证上传文件后缀
         * @access public
         *
         * @param mixed $file 上传文件
         * @param mixed $rule 验证规则
         *
         * @return bool
         */
        public static function fileExt($file, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->fileExt($file, $rule);
        }
        
        /**
         * 验证上传文件类型
         * @access public
         *
         * @param mixed $file 上传文件
         * @param mixed $rule 验证规则
         *
         * @return bool
         */
        public static function fileMime($file, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->fileMime($file, $rule);
        }
        
        /**
         * 验证上传文件大小
         * @access public
         *
         * @param mixed $file 上传文件
         * @param mixed $rule 验证规则
         *
         * @return bool
         */
        public static function fileSize($file, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->fileSize($file, $rule);
        }
        
        /**
         * 验证图片的宽高及类型
         * @access public
         *
         * @param mixed $file 上传文件
         * @param mixed $rule 验证规则
         *
         * @return bool
         */
        public static function image($file, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->image($file, $rule);
        }
        
        /**
         * 验证时间和日期是否符合指定格式
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function dateFormat($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->dateFormat($value, $rule);
        }
        
        /**
         * 验证是否唯一
         * @access public
         *
         * @param mixed  $value 字段值
         * @param mixed  $rule  验证规则 格式：数据表,字段名,排除ID,主键名
         * @param array  $data  数据
         * @param string $field 验证字段名
         *
         * @return bool
         */
        public static function unique($value, $rule, array $data = [], string $field = ''): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->unique($value, $rule, $data, $field);
        }
        
        /**
         * 使用filter_var方式验证
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function filter($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->filter($value, $rule);
        }
        
        /**
         * 验证某个字段等于某个值的时候必须
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function requireIf($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->requireIf($value, $rule, $data);
        }
        
        /**
         * 通过回调方法验证某个字段是否必须
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function requireCallback($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->requireCallback($value, $rule, $data);
        }
        
        /**
         * 验证某个字段有值的情况下必须
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function requireWith($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->requireWith($value, $rule, $data);
        }
        
        /**
         * 验证某个字段没有值的情况下必须
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function requireWithout($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->requireWithout($value, $rule, $data);
        }
        
        /**
         * 验证是否在范围内
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function in($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->in($value, $rule);
        }
        
        /**
         * 验证是否不在某个范围
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function notIn($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->notIn($value, $rule);
        }
        
        /**
         * between验证数据
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function between($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->between($value, $rule);
        }
        
        /**
         * 使用notbetween验证数据
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function notBetween($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->notBetween($value, $rule);
        }
        
        /**
         * 验证数据长度
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function length($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->length($value, $rule);
        }
        
        /**
         * 验证数据最大长度
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function max($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->max($value, $rule);
        }
        
        /**
         * 验证数据最小长度
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function min($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->min($value, $rule);
        }
        
        /**
         * 验证日期
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function after($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->after($value, $rule, $data);
        }
        
        /**
         * 验证日期
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function before($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->before($value, $rule, $data);
        }
        
        /**
         * 验证日期
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function afterWith($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->afterWith($value, $rule, $data);
        }
        
        /**
         * 验证日期
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         * @param array $data  数据
         *
         * @return bool
         */
        public static function beforeWith($value, $rule, array $data = []): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->beforeWith($value, $rule, $data);
        }
        
        /**
         * 验证有效期
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function expire($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->expire($value, $rule);
        }
        
        /**
         * 验证IP许可
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function allowIp($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->allowIp($value, $rule);
        }
        
        /**
         * 验证IP禁用
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则
         *
         * @return bool
         */
        public static function denyIp($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->denyIp($value, $rule);
        }
        
        /**
         * 使用正则验证数据
         * @access public
         *
         * @param mixed $value 字段值
         * @param mixed $rule  验证规则 正则规则或者预定义正则名
         *
         * @return bool
         */
        public static function regex($value, $rule): bool
        {
            
            /** @var \think\Validate $instance */
            return $instance->regex($value, $rule);
        }
        
    }
    
    /**
     * @see     \think\View
     * @package think\facade
     * @mixin \think\View
     */
    class View
    {
        /**
         * 获取模板引擎
         * @access public
         *
         * @param string $type 模板引擎类型
         *
         * @return \think\View
         */
        public static function engine(string $type = null)
        {
            
            /** @var \think\View $instance */
            return $instance->engine($type);
        }
        
        /**
         * 模板变量赋值
         * @access public
         *
         * @param string|array $name  模板变量
         * @param mixed        $value 变量值
         *
         * @return \think\View
         */
        public static function assign($name, $value = null)
        {
            
            /** @var \think\View $instance */
            return $instance->assign($name, $value);
        }
        
        /**
         * 视图过滤
         * @access public
         *
         * @param Callable $filter 过滤方法或闭包
         *
         * @return \think\View
         */
        public static function filter(callable $filter = null)
        {
            
            /** @var \think\View $instance */
            return $instance->filter($filter);
        }
        
        /**
         * 解析和获取模板内容 用于输出
         * @access public
         *
         * @param string $template 模板文件名或者内容
         * @param array  $vars     模板变量
         *
         * @return string
         * @throws \Exception
         */
        public static function fetch(string $template = '', array $vars = []): string
        {
            
            /** @var \think\View $instance */
            return $instance->fetch($template, $vars);
        }
        
        /**
         * 渲染内容输出
         * @access public
         *
         * @param string $content 内容
         * @param array  $vars    模板变量
         *
         * @return string
         */
        public static function display(string $content, array $vars = []): string
        {
            
            /** @var \think\View $instance */
            return $instance->display($content, $vars);
        }
        
        /**
         * 默认驱动
         * @return string|null
         */
        public static function getDefaultDriver()
        {
            
            /** @var \think\View $instance */
            return $instance->getDefaultDriver();
        }
        
    }
    
    /**
     * @see     \think\Db
     * @package think\facade
     * @mixin \think\Db
     */
    class Db
    {
        /**
         * 设置配置对象
         * @access public
         *
         * @param Config $config 配置对象
         *
         * @return void
         */
        public static function setConfig($config): void
        {
            
            /** @var \think\Db $instance */
            $instance->setConfig($config);
        }
        
        /**
         * 获取配置参数
         * @access public
         *
         * @param string $name    配置参数
         * @param mixed  $default 默认值
         *
         * @return mixed
         */
        public static function getConfig(string $name = '', $default = null)
        {
            
            /** @var \think\Db $instance */
            return $instance->getConfig($name, $default);
        }
        
        /**
         * 设置Event对象
         *
         * @param Event $event
         */
        public static function setEvent(Event $event): void
        {
            
            /** @var \think\Db $instance */
            $instance->setEvent($event);
        }
        
        /**
         * 注册回调方法
         * @access public
         *
         * @param string   $event    事件名
         * @param callable $callback 回调方法
         *
         * @return void
         */
        public static function event(string $event, callable $callback): void
        {
            
            /** @var \think\Db $instance */
            $instance->event($event, $callback);
        }
        
        /**
         * 触发事件
         * @access public
         *
         * @param string $event  事件名
         * @param mixed  $params 传入参数
         * @param bool   $once
         *
         * @return mixed
         */
        public static function trigger(string $event, $params = null, bool $once = false)
        {
            
            /** @var \think\Db $instance */
            return $instance->trigger($event, $params, $once);
        }
        
    }
    
}

