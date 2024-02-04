<?php

namespace ContainerVxPq5zM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZPXdjnmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZPXdjnm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZPXdjnm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activity' => ['privates', 'App\\Entity\\Activity', 'getActivityService', false],
            'activityRepository' => ['privates', 'App\\Repository\\ActivityRepository', 'getActivityRepositoryService', false],
            'purchaseItemRepository' => ['privates', 'App\\Repository\\PurchaseItemRepository', 'getPurchaseItemRepositoryService', true],
        ], [
            'activity' => 'App\\Entity\\Activity',
            'activityRepository' => 'App\\Repository\\ActivityRepository',
            'purchaseItemRepository' => 'App\\Repository\\PurchaseItemRepository',
        ]);
    }
}
