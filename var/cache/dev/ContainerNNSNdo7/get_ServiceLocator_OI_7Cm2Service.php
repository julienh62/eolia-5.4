<?php

namespace ContainerNNSNdo7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OI_7Cm2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oI.7Cm2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oI.7Cm2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'staffRepository' => ['privates', 'App\\Repository\\StaffRepository', 'getStaffRepositoryService', true],
        ], [
            'staffRepository' => 'App\\Repository\\StaffRepository',
        ]);
    }
}
