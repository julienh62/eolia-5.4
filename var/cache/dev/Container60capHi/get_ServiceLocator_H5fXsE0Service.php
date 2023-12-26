<?php

namespace Container60capHi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H5fXsE0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.h5fXsE0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.h5fXsE0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitieSettingsRepository' => ['privates', 'App\\Repository\\ActivitieSettingsRepository', 'getActivitieSettingsRepositoryService', true],
        ], [
            'activitieSettingsRepository' => 'App\\Repository\\ActivitieSettingsRepository',
        ]);
    }
}
