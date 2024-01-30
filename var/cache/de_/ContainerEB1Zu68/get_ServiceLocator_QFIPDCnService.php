<?php

namespace ContainerEB1Zu68;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QFIPDCnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qFIPDCn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qFIPDCn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorySetting' => ['privates', '.errored..service_locator.qFIPDCn.App\\Entity\\CategorySetting', NULL, 'Cannot autowire service ".service_locator.qFIPDCn": it references class "App\\Entity\\CategorySetting" but no such service exists.'],
        ], [
            'categorySetting' => 'App\\Entity\\CategorySetting',
        ]);
    }
}
