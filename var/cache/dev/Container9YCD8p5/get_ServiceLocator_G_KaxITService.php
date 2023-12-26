<?php

namespace Container9YCD8p5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G_KaxITService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G.KaxIT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G.KaxIT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendar' => ['privates', '.errored..service_locator.G.KaxIT.App\\Entity\\Calendar', NULL, 'Cannot autowire service ".service_locator.G.KaxIT": it references class "App\\Entity\\Calendar" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'calendar' => 'App\\Entity\\Calendar',
            'entityManager' => '?',
        ]);
    }
}
