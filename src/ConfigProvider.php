<?php

declare(strict_types=1);

namespace Db;

use Laminas\EventManager\EventManager;
use Laminas\EventManager\EventManagerInterface;
use Laminas\EventManager\SharedEventManager;
use Laminas\EventManager\SharedEventManagerInterface;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
            //SettingsProvider::class => (new SettingsProvider)(),
        ];
    }

    public function getDependencyConfig(): array
    {
        return [
            'aliases' => [
                EventManagerInterface::class => EventManager::class,
                SharedEventManagerInterface::class => SharedEventManager::class,
            ],
            'factories' => [
                EventManager::class => Service\EventManagerFactory::class,
                SharedEventManager::class => Service\SharedEventManagerFactory::class,
            ],
        ];
    }
}