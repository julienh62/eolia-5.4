<?php

namespace ContainerVxPq5zM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Iowt0uwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Iowt0uw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Iowt0uw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'staff' => ['privates', '.errored..service_locator.Iowt0uw.App\\Entity\\Staff', NULL, 'Cannot autowire service ".service_locator.Iowt0uw": it references class "App\\Entity\\Staff" but no such service exists.'],
        ], [
            'staff' => 'App\\Entity\\Staff',
        ]);
    }
}
