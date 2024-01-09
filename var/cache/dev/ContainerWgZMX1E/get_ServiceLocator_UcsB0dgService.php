<?php

namespace ContainerWgZMX1E;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UcsB0dgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ucsB0dg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ucsB0dg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'staffSchedule' => ['privates', '.errored..service_locator.ucsB0dg.App\\Entity\\StaffSchedule', NULL, 'Cannot autowire service ".service_locator.ucsB0dg": it references class "App\\Entity\\StaffSchedule" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'staffSchedule' => 'App\\Entity\\StaffSchedule',
        ]);
    }
}
