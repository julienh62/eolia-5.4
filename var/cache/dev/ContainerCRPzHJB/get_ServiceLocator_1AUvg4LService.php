<?php

namespace ContainerCRPzHJB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1AUvg4LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1AUvg4L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1AUvg4L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'formatdateService' => ['privates', 'App\\Service\\Formatdate', 'getFormatdateService', true],
        ], [
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'formatdateService' => 'App\\Service\\Formatdate',
        ]);
    }
}
