<?php

namespace ContainerXEYTyGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminStaffScheduleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\AdminStaffScheduleController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminStaffScheduleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'AdminStaffScheduleController.php';

        $container->services['App\\Controller\\Admin\\AdminStaffScheduleController'] = $instance = new \App\Controller\Admin\AdminStaffScheduleController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Admin\\AdminStaffScheduleController', $container));

        return $instance;
    }
}
