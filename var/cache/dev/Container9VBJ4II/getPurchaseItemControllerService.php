<?php

namespace Container9VBJ4II;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseItemControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\PurchaseItem\PurchaseItemController' shared autowired service.
     *
     * @return \App\Controller\Admin\PurchaseItem\PurchaseItemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'PurchaseItem'.\DIRECTORY_SEPARATOR.'PurchaseItemController.php';

        $container->services['App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController'] = $instance = new \App\Controller\Admin\PurchaseItem\PurchaseItemController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Admin\\PurchaseItem\\PurchaseItemController', $container));

        return $instance;
    }
}