<?php

namespace Container97MnhJv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EeQJORDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eeQJORD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eeQJORD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'staffSchedule' => ['privates', '.errored..service_locator.eeQJORD.App\\Entity\\StaffSchedule', NULL, 'Cannot autowire service ".service_locator.eeQJORD": it references class "App\\Entity\\StaffSchedule" but no such service exists.'],
        ], [
            'staffSchedule' => 'App\\Entity\\StaffSchedule',
        ]);
    }
}
