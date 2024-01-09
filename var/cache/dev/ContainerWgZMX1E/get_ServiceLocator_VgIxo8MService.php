<?php

namespace ContainerWgZMX1E;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VgIxo8MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vgIxo8M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vgIxo8M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitieRepository' => ['privates', 'App\\Repository\\ActivitieRepository', 'getActivitieRepositoryService', false],
            'categoryRepository' => ['privates', '.errored.HVCCyUe', NULL, 'Cannot determine controller argument for "App\\Controller\\ActivitieController::filterPrice()": the $categoryRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\CategoryRepository". Did you forget to add a use statement?'],
            'formatdateService' => ['privates', 'App\\Service\\Formatdate', 'getFormatdateService', true],
        ], [
            'activitieRepository' => 'App\\Repository\\ActivitieRepository',
            'categoryRepository' => '?',
            'formatdateService' => 'App\\Service\\Formatdate',
        ]);
    }
}