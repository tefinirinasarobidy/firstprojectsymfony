<?php

namespace ContainerRQKHZZx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationUpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', 'I:\\symfony/translations', 'I:\\symfony/templates', [0 => 'I:\\symfony\\vendor\\symfony\\validator/Resources/translations', 1 => 'I:\\symfony\\vendor\\symfony\\form/Resources/translations', 2 => 'I:\\symfony\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'I:\\symfony\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'I:\\symfony\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'I:\\symfony\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 4 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 5 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 6 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 7 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 8 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 9 => 'I:\\symfony\\vendor\\symfony\\validator\\ValidatorBuilder.php', 10 => 'I:\\symfony\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 11 => 'I:\\symfony\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php', 12 => 'I:\\symfony\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 13 => 'I:\\symfony\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 14 => 'I:\\symfony\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php']);

        $instance->setName('translation:update');
        $instance->setDescription('Update the translation file');

        return $instance;
    }
}
