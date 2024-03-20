<?php

namespace ContainerJa1iL2p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sk5w10cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sk5w10c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sk5w10c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'formedeboxe' => ['privates', '.errored..service_locator.sk5w10c.App\\Entity\\Formedeboxe', NULL, 'Cannot autowire service ".service_locator.sk5w10c": it needs an instance of "App\\Entity\\Formedeboxe" but this type has been excluded in "config/services.yaml".'],
            'formrdeboxeRepository' => ['privates', 'App\\Repository\\FormedeboxeRepository', 'getFormedeboxeRepositoryService', true],
        ], [
            'formedeboxe' => 'App\\Entity\\Formedeboxe',
            'formrdeboxeRepository' => 'App\\Repository\\FormedeboxeRepository',
        ]);
    }
}