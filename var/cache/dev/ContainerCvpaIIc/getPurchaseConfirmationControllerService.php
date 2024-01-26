<?php

namespace ContainerCvpaIIc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseConfirmationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Purchase\PurchaseConfirmationController' shared autowired service.
     *
     * @return \App\Controller\Purchase\PurchaseConfirmationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Purchase'.\DIRECTORY_SEPARATOR.'PurchaseConfirmationController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Purchase'.\DIRECTORY_SEPARATOR.'PurchasePersister.php';

        $a = ($container->privates['App\\Service\\CartService'] ?? $container->getCartServiceService());
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());
        $c = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        $container->services['App\\Controller\\Purchase\\PurchaseConfirmationController'] = $instance = new \App\Controller\Purchase\PurchaseConfirmationController($a, $b, $c, new \App\Purchase\PurchasePersister($a, $c, $b));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Purchase\\PurchaseConfirmationController', $container));

        return $instance;
    }
}
