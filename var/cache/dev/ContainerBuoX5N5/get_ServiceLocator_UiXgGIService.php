<?php

namespace ContainerBuoX5N5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UiXgGIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UiXgGI_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UiXgGI_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'formedeboxe' => ['privates', '.errored..service_locator.UiXgGI_.App\\Entity\\Formedeboxe', NULL, 'Cannot autowire service ".service_locator.UiXgGI_": it needs an instance of "App\\Entity\\Formedeboxe" but this type has been excluded in "config/services.yaml".'],
        ], [
            'em' => '?',
            'formedeboxe' => 'App\\Entity\\Formedeboxe',
        ]);
    }
}
