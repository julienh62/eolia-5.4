<?php

namespace ContainerJAoZZ27;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormatdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Formatdate' shared autowired service.
     *
     * @return \App\Service\Formatdate
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Formatdate.php';

        return $container->privates['App\\Service\\Formatdate'] = new \App\Service\Formatdate();
    }
}
