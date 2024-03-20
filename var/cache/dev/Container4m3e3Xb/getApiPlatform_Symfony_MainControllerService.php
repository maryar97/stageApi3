<?php

namespace Container4m3e3Xb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Symfony_MainControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.symfony.main_controller' shared service.
     *
     * @return \ApiPlatform\Symfony\Controller\MainController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/Controller/MainController.php';

        return $container->services['api_platform.symfony.main_controller'] = new \ApiPlatform\Symfony\Controller\MainController(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['api_platform.state_provider.content_negotiation'] ?? $container->load('getApiPlatform_StateProvider_ContentNegotiationService')), ($container->privates['api_platform.state_processor.write'] ?? $container->load('getApiPlatform_StateProcessor_WriteService')), ($container->privates['api_platform.uri_variables.converter'] ?? self::getApiPlatform_UriVariables_ConverterService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}
