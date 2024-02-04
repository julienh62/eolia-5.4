<?php

namespace ContainerNNSNdo7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NYum7NIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NYum7NI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NYum7NI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'calendar' => ['privates', '.errored..service_locator.NYum7NI.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.NYum7NI": it references class "App\\Entity\\Calendar" but no such service exists. You should maybe alias this class to the existing "App\\Entity\\Activity" service.'],
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'purchaseItemRepository' => ['privates', 'App\\Repository\\PurchaseItemRepository', 'getPurchaseItemRepositoryService', true],
        ], [
            'UserRepository' => 'App\\Repository\\UserRepository',
            'calendar' => 'App\\Entity\\Calendar',
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'purchaseItemRepository' => 'App\\Repository\\PurchaseItemRepository',
        ]);
    }
}
