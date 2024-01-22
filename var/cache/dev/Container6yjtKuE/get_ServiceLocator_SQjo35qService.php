<?php

namespace Container6yjtKuE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SQjo35qService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SQjo35q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SQjo35q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Activity' => ['privates', 'App\\Entity\\Activity', 'getActivityService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'Activity' => 'App\\Entity\\Activity',
            'entityManager' => '?',
        ]);
    }
}