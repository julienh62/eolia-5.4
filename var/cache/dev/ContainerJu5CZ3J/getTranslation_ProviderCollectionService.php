<?php

namespace ContainerJu5CZ3J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_ProviderCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'translation.provider_collection' shared service.
     *
     * @return \Symfony\Component\Translation\Provider\TranslationProviderCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TranslationProviderCollection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TranslationProviderCollectionFactory.php';

        return $container->privates['translation.provider_collection'] = (new \Symfony\Component\Translation\Provider\TranslationProviderCollectionFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => (new \Symfony\Component\Translation\Provider\NullProviderFactory());
            yield 1 => $container->load('getTranslation_ProviderFactory_LocoService');
        }, 2), []))->fromConfig(['crowdin' => ['dsn' => $container->getEnv('CROWDIN_DSN'), 'domains' => [], 'locales' => []], 'loco' => ['dsn' => $container->getEnv('LOCO_DSN'), 'domains' => [], 'locales' => []], 'lokalise' => ['dsn' => $container->getEnv('LOKALISE_DSN'), 'domains' => [], 'locales' => []]]);
    }
}
