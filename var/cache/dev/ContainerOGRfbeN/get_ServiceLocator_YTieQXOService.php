<?php

namespace ContainerOGRfbeN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YTieQXOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YTieQXO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YTieQXO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', false],
            'dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'purchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'dispatcher' => '?',
            'em' => '?',
            'purchaseRepository' => 'App\\Repository\\PurchaseRepository',
        ]);
    }
}
