<?php

namespace ContainerZWpifUw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RnxwCm0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rnxwCm0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rnxwCm0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'licence' => ['privates', '.errored..service_locator.rnxwCm0.App\\Entity\\Licence', NULL, 'Cannot autowire service ".service_locator.rnxwCm0": it needs an instance of "App\\Entity\\Licence" but this type has been excluded in "config/services.yaml".'],
            'user' => ['privates', '.errored..service_locator.rnxwCm0.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.rnxwCm0": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
            'userRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'em' => '?',
            'licence' => 'App\\Entity\\Licence',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
            'userRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}