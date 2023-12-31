<?php

namespace ContainerWgZMX1E;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jr9FLoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jr9_fLo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jr9_fLo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitieRepository' => ['privates', 'App\\Repository\\ActivitieRepository', 'getActivitieRepositoryService', false],
        ], [
            'activitieRepository' => 'App\\Repository\\ActivitieRepository',
        ]);
    }
}
