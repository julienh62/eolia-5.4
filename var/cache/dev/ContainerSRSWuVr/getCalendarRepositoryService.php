<?php

namespace ContainerSRSWuVr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CalendarRepository' shared autowired service.
     *
     * @return \App\Repository\CalendarRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'CalendarRepository.php';

        return $container->privates['App\\Repository\\CalendarRepository'] = new \App\Repository\CalendarRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
