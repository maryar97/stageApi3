<?php

namespace ContainerJa1iL2p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SecurityController.php';

        $container->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\SecurityController', $container));

        return $instance;
    }
}
