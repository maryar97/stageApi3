<?php

namespace ContainerELJsLJQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotExposedService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.not_exposed' shared service.
     *
     * @return \ApiPlatform\Action\NotExposedAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/NotExposedAction.php';

        return $container->services['api_platform.action.not_exposed'] = new \ApiPlatform\Action\NotExposedAction();
    }
}
