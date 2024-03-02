<?php

namespace Container2ItE7iB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J__DDaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J..d_da' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J..d_da'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}
