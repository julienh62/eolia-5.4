<?php

namespace Container5zvn2Pv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SH2YbTUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SH2YbTU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SH2YbTU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calendarRepository' => ['privates', 'App\\Repository\\CalendarRepository', 'getCalendarRepositoryService', true],
            'generateLinkExtension' => ['privates', 'App\\Twig\\GenerateLinkExtension', 'getGenerateLinkExtensionService', false],
        ], [
            'calendarRepository' => 'App\\Repository\\CalendarRepository',
            'generateLinkExtension' => 'App\\Twig\\GenerateLinkExtension',
        ]);
    }
}
