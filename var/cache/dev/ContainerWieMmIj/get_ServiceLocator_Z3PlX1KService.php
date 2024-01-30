<?php

namespace ContainerWieMmIj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z3PlX1KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z3PlX1K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z3PlX1K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activity' => ['privates', 'App\\Entity\\Activity', 'getActivityService', false],
        ], [
            'activity' => 'App\\Entity\\Activity',
        ]);
    }
}
