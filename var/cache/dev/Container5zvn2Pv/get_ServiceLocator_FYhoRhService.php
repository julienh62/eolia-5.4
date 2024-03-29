<?php

namespace Container5zvn2Pv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FYhoRhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F_YhoRh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F_YhoRh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', '.errored..service_locator.F_YhoRh.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.F_YhoRh": it references class "App\\Entity\\Calendar" but no such service exists. You should maybe alias this class to the existing "App\\Entity\\Activity" service.'],
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
        ], [
            'calendar' => 'App\\Entity\\Calendar',
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
        ]);
    }
}
