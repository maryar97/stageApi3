<?php

namespace ContainerZWpifUw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? self::getTranslatorService($container)), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [(\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestPayloadValueResolver.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ColorType.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php'), (\dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/TranslatableNormalizer.php'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php'), (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/Provider/DeserializeProvider.php'), (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Symfony/EventListener/DeserializeListener.php'), (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/Util/OperationRequestInitiatorTrait.php'), (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php')], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
