<?php

namespace ContainerX1E1RbI;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YxunorqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yxunorq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yxunorq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'purchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.yxunorq.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.yxunorq": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'purchaseRepository' => 'App\\Repository\\PurchaseRepository',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
