<?php

namespace ContainerXEYTyGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LcSaPyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._lcSaPy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._lcSaPy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activityRepository' => ['privates', 'App\\Repository\\ActivityRepository', 'getActivityRepositoryService', false],
            'formatdateService' => ['privates', 'App\\Service\\Formatdate', 'getFormatdateService', true],
        ], [
            'activityRepository' => 'App\\Repository\\ActivityRepository',
            'formatdateService' => 'App\\Service\\Formatdate',
        ]);
    }
}
