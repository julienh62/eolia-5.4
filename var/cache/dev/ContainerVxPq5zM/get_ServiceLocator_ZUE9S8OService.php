<?php

namespace ContainerVxPq5zM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZUE9S8OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZUE9S8O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZUE9S8O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'purchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
            'stripeService' => ['privates', 'App\\Stripe\\StripeService', 'getStripeServiceService', true],
        ], [
            'purchaseRepository' => 'App\\Repository\\PurchaseRepository',
            'stripeService' => 'App\\Stripe\\StripeService',
        ]);
    }
}
