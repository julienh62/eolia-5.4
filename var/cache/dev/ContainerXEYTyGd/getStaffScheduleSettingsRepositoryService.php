<?php

namespace ContainerXEYTyGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStaffScheduleSettingsRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\StaffScheduleSettingsRepository' shared autowired service.
     *
     * @return \App\Repository\StaffScheduleSettingsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'StaffScheduleSettingsRepository.php';

        return $container->privates['App\\Repository\\StaffScheduleSettingsRepository'] = new \App\Repository\StaffScheduleSettingsRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
