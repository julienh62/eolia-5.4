<?php

namespace ContainerSRSWuVr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5Fs0VYSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5Fs0VYS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5Fs0VYS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'PurchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.5Fs0VYS.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.5Fs0VYS": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'PurchaseRepository' => 'App\\Repository\\PurchaseRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
