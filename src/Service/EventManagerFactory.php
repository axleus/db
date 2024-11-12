<?php

declare(strict_types=1);

namespace Db\Service;

use Laminas\EventManager\EventManager;
use Laminas\EventManager\EventManagerInterface;
use Laminas\EventManager\SharedEventManager;
use Psr\Container\ContainerInterface;

final class EventManagerFactory
{
    public function __invoke(ContainerInterface $container): EventManagerInterface
    {
        return new EventManager(
            new SharedEventManager()
        );
    }
}
