<?php
/**
 * Initialize a dependency injection container that implemented PSR-11 and return the container.
 */

declare(strict_types = 1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use Hyperf\Di\Container;
use Hyperf\Di\Definition\DefinitionSourceFactory;
use Hyperf\Utils\ApplicationContext;
// container 初始化
$container = new Container((new DefinitionSourceFactory(true))());

if (!$container instanceof \Psr\Container\ContainerInterface) {
    throw new RuntimeException('The dependency injection container is invalid.');
}
// 设置后, 方便全局获取 container 实例
return ApplicationContext::setContainer($container);
