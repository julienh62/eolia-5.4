<?php

namespace Container39RUDws;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V0t6lxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v_0t6lx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v_0t6lx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.v_0t6lx.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.v_0t6lx": it references class "App\\Entity\\Category" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'category' => 'App\\Entity\\Category',
            'entityManager' => '?',
            'slugger' => '?',
        ]);
    }
}
