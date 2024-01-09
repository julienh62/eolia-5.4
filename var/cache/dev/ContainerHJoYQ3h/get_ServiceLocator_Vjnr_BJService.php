<?php

namespace ContainerHJoYQ3h;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vjnr_BJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vjnr.bJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vjnr.bJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitieRepository' => ['privates', 'App\\Repository\\ActivitieRepository', 'getActivitieRepositoryService', false],
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'formatdateService' => ['privates', 'App\\Service\\Formatdate', 'getFormatdateService', true],
            'staffScheduleRepository' => ['privates', 'App\\Repository\\StaffScheduleRepository', 'getStaffScheduleRepositoryService', true],
        ], [
            'activitieRepository' => 'App\\Repository\\ActivitieRepository',
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'formatdateService' => 'App\\Service\\Formatdate',
            'staffScheduleRepository' => 'App\\Repository\\StaffScheduleRepository',
        ]);
    }
}
