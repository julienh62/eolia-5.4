<?php

namespace ContainerJAoZZ27;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseSuccessStockService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventDispatcher\PurchaseSuccessStock' shared autowired service.
     *
     * @return \App\EventDispatcher\PurchaseSuccessStock
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'PurchaseSuccessStock.php';

        $a = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventDispatcher\\PurchaseSuccessStock'])) {
            return $container->privates['App\\EventDispatcher\\PurchaseSuccessStock'];
        }

        return $container->privates['App\\EventDispatcher\\PurchaseSuccessStock'] = new \App\EventDispatcher\PurchaseSuccessStock($a, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $container->load('getSession_FlashBagService'));
    }
}
