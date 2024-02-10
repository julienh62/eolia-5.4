<?php

namespace Container9VBJ4II;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U55iHjJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U55iHjJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U55iHjJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activityRepository' => ['privates', 'App\\Repository\\ActivityRepository', 'getActivityRepositoryService', false],
        ], [
            'activityRepository' => 'App\\Repository\\ActivityRepository',
        ]);
    }
}
