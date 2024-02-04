<?php

namespace ContainerNNSNdo7;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaffScheduleRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\StaffScheduleRepository' shared autowired service.
     *
     * @return \App\Repository\StaffScheduleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'StaffScheduleRepository.php';

        return $container->privates['App\\Repository\\StaffScheduleRepository'] = new \App\Repository\StaffScheduleRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
