<?php

namespace ContainerSm9UEOF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GZHpsOxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GZHpsOx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GZHpsOx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', '.errored..service_locator.GZHpsOx.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.GZHpsOx": it references class "App\\Entity\\Calendar" but no such service exists. You should maybe alias this class to the existing "App\\Entity\\Activity" service.'],
            'sendMailService' => ['privates', 'App\\Service\\SendMailService', 'getSendMailServiceService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'calendar' => 'App\\Entity\\Calendar',
            'sendMailService' => 'App\\Service\\SendMailService',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
