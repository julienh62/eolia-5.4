<?php

namespace ContainerHJoYQ3h;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3WdypService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._O3Wdyp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._O3Wdyp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activitie' => ['privates', 'App\\Entity\\Activitie', 'getActivitieService', false],
        ], [
            'activitie' => 'App\\Entity\\Activitie',
        ]);
    }
}
