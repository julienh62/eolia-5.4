<?php

namespace Container2M917Bu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TJOTaadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TJOTaad' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TJOTaad'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'staffScheduleRepository' => ['privates', 'App\\Repository\\StaffScheduleRepository', 'getStaffScheduleRepositoryService', true],
        ], [
            'staffScheduleRepository' => 'App\\Repository\\StaffScheduleRepository',
        ]);
    }
}
