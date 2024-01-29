<?php

namespace ContainerX1E1RbI;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaffRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\StaffRepository' shared autowired service.
     *
     * @return \App\Repository\StaffRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'StaffRepository.php';

        return $container->privates['App\\Repository\\StaffRepository'] = new \App\Repository\StaffRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
