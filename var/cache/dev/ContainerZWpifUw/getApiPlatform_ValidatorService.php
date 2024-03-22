<?php

namespace ContainerZWpifUw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.validator' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\Validator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Validator/Validator.php';

        return $container->privates['api_platform.validator'] = new \ApiPlatform\Symfony\Validator\Validator(($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->privates['api_platform.filter_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])));
    }
}
