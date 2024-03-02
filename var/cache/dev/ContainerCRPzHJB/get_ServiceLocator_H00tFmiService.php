<?php

namespace ContainerCRPzHJB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H00tFmiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H00tFmi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H00tFmi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'purchaseItemRepository' => ['privates', 'App\\Repository\\PurchaseItemRepository', 'getPurchaseItemRepositoryService', true],
        ], [
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'purchaseItemRepository' => 'App\\Repository\\PurchaseItemRepository',
        ]);
    }
}
