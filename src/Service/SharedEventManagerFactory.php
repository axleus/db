<?php

declare(strict_types=1);

namespace Db\Service;

use Laminas\EventManager\SharedEventManager;
use Laminas\EventManager\SharedEventManagerInterface;
use Psr\Container\ContainerInterface;

final class SharedEventManagerFactory
{
    public function __invoke(ContainerInterface $container): SharedEventManager
    {
        if ($container->has(SharedEventManagerInterface::class)) {
            return $container->get(SharedEventManagerInterface::class);
        }
        if ($container->has(SharedEventManager::class)) {
            return $container->get(SharedEventManager::class);
        }
        return new SharedEventManager();
    }
}
