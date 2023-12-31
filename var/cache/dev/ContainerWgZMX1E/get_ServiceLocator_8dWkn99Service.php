<?php

namespace ContainerWgZMX1E;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8dWkn99Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8dWkn99' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8dWkn99'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', false],
            'formatdate' => ['privates', 'App\\Service\\Formatdate', 'getFormatdateService', true],
        ], [
            'cartService' => 'App\\Service\\CartService',
            'formatdate' => 'App\\Service\\Formatdate',
        ]);
    }
}
