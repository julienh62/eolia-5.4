<?php

namespace ContainerCEIjVkq;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PfcqVkMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pfcqVkM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pfcqVkM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'purchaseItemRepository' => ['privates', 'App\\Repository\\PurchaseItemRepository', 'getPurchaseItemRepositoryService', true],
        ], [
            'purchaseItemRepository' => 'App\\Repository\\PurchaseItemRepository',
        ]);
    }
}