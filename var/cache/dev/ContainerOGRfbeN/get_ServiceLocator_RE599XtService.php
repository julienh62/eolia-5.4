<?php

namespace ContainerOGRfbeN;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RE599XtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rE599Xt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rE599Xt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorySettingRepository' => ['privates', 'App\\Repository\\CategorySettingRepository', 'getCategorySettingRepositoryService', true],
        ], [
            'categorySettingRepository' => 'App\\Repository\\CategorySettingRepository',
        ]);
    }
}
