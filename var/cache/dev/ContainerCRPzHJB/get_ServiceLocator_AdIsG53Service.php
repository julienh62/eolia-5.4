<?php

namespace ContainerCRPzHJB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AdIsG53Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.adIsG53' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.adIsG53'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'activity' => ['privates', 'App\\Entity\\Activity', 'getActivityService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'activity' => 'App\\Entity\\Activity',
            'entityManager' => '?',
        ]);
    }
}
